import React, { useEffect, useState } from "react";
import ReactDOM, { render } from "react-dom";
import "datatables.net-dt/js/dataTables.dataTables";
import "datatables.net-dt/css/jquery.dataTables.min.css";
import axios from "axios";
import { validateCreateUser } from "./validation";
import { isEmpty } from "lodash";
import swal from "@sweetalert/with-react";
const domElement = document.getElementById("users-root");

const RolePicker = ({ data, onPick }) => {
  return (
    <div className="form-group">
      <select onChange={e => console.log(e)} value="" className="form-control">
        <option value="1">IT2</option>
        <option value="2">Marketing</option>
      </select>
    </div>
  );
};

const Users = () => {
  const [departments, setDepartments] = useState([]);
  const [user, setUser] = useState({
    name: "",
    email: "",
    password: "",
    confirmPassword: "",
    department_id: ""
  });
  const [allUsers, setAllUsers] = useState([]);
  const [validationErrors, setValidationErrors] = useState(null);
  const [assignedRole, setAssignedRole] = useState("");
  const [roles, setRoles] = useState([]);
  const [selectedUser, setSelectedUser] = useState("");
  useEffect(() => {
    _fetchDepartments();
    _fetchUsers().then(() => {
      window.$("#example23").DataTable({
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "pdf", "print"]
      });
    });
    _fetchRoles()
  }, []);
  const _fetchDepartments = async () => {
    try {
      const { data } = await axios.get("/api/getDepartments");
      setDepartments(data);
    } catch (e) {
      console.log(e);
    }
  };
  const _fetchUsers = async () => {
    try {
      const { data } = await axios.get("/api/getUsers");
      setAllUsers(data);
    } catch (e) {
      console.log(e);
    }
  };
  const _fetchRoles = async () => {
    try{
      const {data} = await axios.get("/api/getRoles");
      setRoles(data);
    }catch(e){
      console.log(e);
    }
  }
  const _setUserValue = e => {
    setUser(prevState => {
      return {
        ...prevState,
        [e.target.name]: e.target.value
      };
    });
  };
  const _onCreateFormSubmit = async e => {
    e.preventDefault();
    const validate = await validateCreateUser(user);
    if (validate === undefined) {
      setValidationErrors(validate);
      const { name, email, password, department_id } = user;
      try {
        const {
          data: userCreatedResponse
        } = await axios.post("/api/createUser", {
          name,
          email,
          password,
          department_id,
          hr_portal: true
        });
        if (userCreatedResponse.hasOwnProperty("success")) {
          window.location.reload();
        }
      } catch (e) {
        if (e.response.status === 422) {
          setValidationErrors(e.response.data.errors);
        }
      }
    } else {
      setValidationErrors(validate);
    }
  };
  const _renderError = fieldName => {
    if (
      !isEmpty(validationErrors) &&
      validationErrors[fieldName] !== undefined
    ) {
      return (
        <span className="help-block">
          {validationErrors[fieldName].join(" ")}
        </span>
      );
    } else {
      return <div />;
    }
  };
  const _renderHasError = fieldName => {
    if (
      !isEmpty(validationErrors) &&
      validationErrors[fieldName] !== undefined
    ) {
      return "has-error";
    } else {
      return "<div/>";
    }
  };
  const _changePasswordRequest = (e, userObject) => {
    e.preventDefault();
    swal({
      title: "Password Change Request?",
      text: `An email with temporary password will be sent to ${userObject.email}.`,
      icon: "warning",
      buttons: true,
      dangerMode: true
    }).then(sendEmail => {
      if (sendEmail) {
        swal("An email with temporary password is sent.", {
          icon: "success"
        });
      } else {
        swal("Request cancelled.");
      }
    });
  };
  const _onDeleteUser = (e, userObject, index) => {
    e.preventDefault();
    swal({
      title: "Deleting user!",
      text: `Are you sure, you want to remove ${userObject.name}?`,
      icon: "warning",
      buttons: true,
      dangerMode: true
    }).then(async deleteUser => {
      if (deleteUser) {
        const { data: userDeleteResponse } = await axios.get(
          `/api/deleteUser/${userObject.id}`
        );
        if (userDeleteResponse.hasOwnProperty("success")) {
          setAllUsers(prevState => {
            return prevState.filter(item => item.id !== userObject.id);
          });
          swal("User is removed.", {
            icon: "success"
          });
        }
      } else {
        swal("User removal request was cancelled");
      }
    });
  };
  const _onRoleChange = e => {
    setAssignedRole(e.target.value);
  };
  const _assignRole = e => {

  }
  const _onAssignRole = (e, user) => {
    e.preventDefault();
    setSelectedUser(user);
  }
  return (
    <div className="container-fluid">
      <div className="row bg-title">
        <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 className="page-title">User</h4>
        </div>
        <div className="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol className="breadcrumb">
            <li>
              <a href="index.html">Dashboard</a>
            </li>
            <li className="active">User</li>
          </ol>
        </div>
      </div>
      <div className="row">
        <div className="col-md-12">
          <div className="white-box">
            <button
              className="fcbtn btn btn-success btn-1f"
              data-toggle="modal"
              data-target=".bs-example-modal-lg"
            >
              <i className="fa fa-edit" /> Create new user.
            </button>
          </div>
        </div>
      </div>
      <div className="row">
        <div className="col-sm-12">
          <div className="white-box">
            <div className="table-responsive">
              <table
                id="example23"
                className="display nowrap"
                cellSpacing={0}
                width="100%"
              >
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th />
                  </tr>
                </tfoot>
                <tbody>
                  {allUsers.map((userObject, index) =>
                    <tr key={String(userObject.id)}>
                      <td>
                        <a href="javascript:void(0)">
                          #{userObject.id}
                        </a>
                      </td>
                      <td>
                        {userObject.name}
                      </td>
                      <td>
                        {userObject.email}
                      </td>
                      <td>asd</td>
                      <td>
                        {userObject.department.department}
                      </td>
                      <td>
                        <div className="btn-group m-r-10">
                          <button
                            aria-expanded="false"
                            data-toggle="dropdown"
                            className="btn dropdown-toggle waves-effect waves-light"
                            type="button"
                          >
                            Actions <span className="caret" />
                          </button>
                          <ul role="menu" className="dropdown-menu">
                            {/* <li>
                            <a href="#">Edit</a>
                          </li> */}
                            <li>
                              <a
                                onClick={e => _onDeleteUser(e, userObject)}
                                role="button"
                                href="#"
                              >
                                Delete
                              </a>
                            </li>
                            <li>
                              <a
                                role="button"
                                onClick={e =>
                                  _changePasswordRequest(e, userObject, index)}
                                href="#"
                              >
                                Change Password
                              </a>
                            </li>
                            <li>
                              <a
                                role="button"
                                data-toggle="modal"
                                data-target=".bs-example-modal-sm"
                                onClick={e => _onAssignRole(e, userObject)}
                              >
                                Assign Role
                              </a>
                            </li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  )}
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div
          className="modal fade bs-example-modal-sm"
          tabIndex={-1}
          role="dialog"
          aria-labelledby="mySmallModalLabel"
          aria-hidden="true"
          style={{ display: "none" }}
        >
          <div className="modal-dialog modal-sm">
            <div className="modal-content">
              <div className="modal-header">
                <button
                  type="button"
                  className="close"
                  data-dismiss="modal"
                  aria-hidden="true"
                >
                  ×
                </button>
                <h4 className="modal-title" id="mySmallModalLabel">
                  Select Role
                </h4>{" "}
              </div>
              <div className="modal-body">
                <div className="form-group">
                  <select
                    onChange={_onRoleChange}
                    value={assignedRole}
                    className="form-control"
                  >
                    <option value="">Select Role</option>
                    {roles.map((rol, index ) => (
                      <option key={String(rol.id)} value={rol.id}>{rol.display_name}</option>
                    ))}
                  </select>
                </div>
              </div>
              <div className="modal-footer">
                <button
                  type="button"
                  className="btn btn-default waves-effect"
                  data-dismiss="modal"
                >
                  Close
                </button>
                <button
                  type="submit"
                  className="btn btn-danger waves-effect waves-light departmentSubmit"
                  data-dismiss="modal"
                  onClick={_assignRole}
                >
                  Assign
                </button>
              </div>
            </div>
            {/* /.modal-content */}
          </div>
          {/* /.modal-dialog */}
        </div>

        <div
          className="modal fade bs-example-modal-lg"
          tabIndex={-1}
          role="dialog"
          aria-labelledby="myLargeModalLabel"
          aria-hidden="true"
          style={{ display: "none" }}
        >
          <div className="modal-dialog modal-lg">
            <div className="modal-content">
              <div className="modal-header">
                <button
                  type="button"
                  className="close"
                  data-dismiss="modal"
                  aria-hidden="true"
                >
                  ×
                </button>
                <h4 className="modal-title" id="myLargeModalLabel">
                  Create new user
                </h4>
              </div>
              <form onSubmit={_onCreateFormSubmit}>
                <div className="modal-body">
                  <div className="form-body">
                    <h6 className="box-title">
                      Please fill all the required fields.
                    </h6>
                    <hr />
                    <div className="row">
                      <div className="col-md-6">
                        <div
                          className={`form-group ${_renderHasError("name")}`}
                        >
                          <label className="control-label">Full Name</label>
                          <input
                            type="text"
                            className="form-control"
                            placeholder="Enter name"
                            name="name"
                            onChange={_setUserValue}
                            value={user.name}
                          />
                          {_renderError("name")}
                        </div>
                      </div>
                      {/*/span*/}
                      <div className="col-md-6">
                        {/* <div className="form-group has-error"> */}
                        <div
                          className={`form-group ${_renderHasError("email")}`}
                        >
                          <label className="control-label">Email</label>
                          <input
                            type="text"
                            className="form-control"
                            placeholder="Enter email"
                            name="email"
                            onChange={_setUserValue}
                            value={user.email}
                          />
                          {_renderError("email")}
                        </div>
                      </div>
                      {/*/span*/}
                    </div>
                    <div className="row">
                      <div className="col-md-6">
                        <div
                          className={`form-group ${_renderHasError(
                            "password"
                          )}`}
                        >
                          <label className="control-label">Password</label>
                          <input
                            type="password"
                            id="firstName"
                            className="form-control"
                            placeholder="Password"
                            name="password"
                            onChange={_setUserValue}
                            value={user.password}
                          />{" "}
                          <span className="help-block">
                            {" "}Password should be at least 8 characters with
                            special characters and numbers.{" "}
                          </span>{" "}
                          {_renderError("password")}
                        </div>
                      </div>
                      {/*/span*/}
                      <div className="col-md-6">
                        {/* <div className="form-group has-error"> */}
                        <div
                          className={`form-group ${_renderHasError(
                            "confirmPassword"
                          )}`}
                        >
                          <label className="control-label">
                            Confirm Password
                          </label>
                          <input
                            type="text"
                            id="lastName"
                            className="form-control"
                            placeholder="Confirm Password"
                            name="confirmPassword"
                            onChange={_setUserValue}
                            value={user.confirmPassword}
                          />
                          {_renderError("confirmPassword")}
                          {/* <span className="help-block"> This field has error. </span> */}
                        </div>
                      </div>
                      {/*/span*/}
                    </div>
                    {/*/row*/}
                    <div className="row">
                      <div className="col-md-12">
                        <div
                          className={`form-group ${_renderHasError(
                            "department_id"
                          )}`}
                        >
                          <label className="control-label">
                            Select Department
                          </label>
                          <select
                            value={user.department_id}
                            onChange={_setUserValue}
                            name={"department_id"}
                            className="form-control"
                          >
                            <option value="">Select Department</option>
                            {departments.map((department, index) =>
                              <option
                                key={String(department.id)}
                                value={department.id}
                              >
                                {department.department}
                              </option>
                            )}
                          </select>
                          {_renderError("department_id")}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div className="modal-footer">
                  <button
                    type="button"
                    className="btn btn-default waves-effect"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button
                    type="submit"
                    className="btn btn-danger waves-effect waves-light departmentSubmit"
                  >
                    Continue
                  </button>
                </div>
              </form>
            </div>
            {/* /.modal-content */}
          </div>
          {/* /.modal-dialog */}
        </div>
      </div>
    </div>
  );
};

if (domElement) {
  render(<Users />, domElement);
}

export default Users;
