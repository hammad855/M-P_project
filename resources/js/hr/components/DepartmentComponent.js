import React, { useState, useEffect, useCallback } from "react";
import ReactDOM, { render } from "react-dom";
import swal from "sweetalert";

const domElement = document.getElementById("department-root");

const Department = () => {
  const [department, setDepartment] = useState({
    department_name: "",
    department_code: ""
  });
  const [departments, setDepartments] = useState([]);
  const [action, setAction] = useState("Add");
  const [selected, setSelected] = useState({});
  useEffect(() => {
    _fetchDepartments();
  }, []);
  const _fetchDepartments = async () => {
    try {
      const { data } = await axios.get("/api/getDepartments");
      setDepartments(data);
    } catch (e) {
      console.log(e);
    }
  };
  const _onFormSubmit = async e => {
    e.preventDefault();
    if (action === "Add") {
      try {
        const { data } = await axios.post("/api/addDepartment", department);
        const newData = data.data;
        // setDepartments(prevState => [...prevState, newData]);
        if (data.hasOwnProperty("success")) {
          window.location.reload();
        }
      } catch (e) {
        console.log(e);
      }
    } else if (action === "Edit") {
      try {
        const { data } = await axios.post(
          `/api/editDepartment/${selected.id}`,
          department
        );
        const newData = data.data;
        setDepartments(() => {
          return departments.map(
            item => (item.id === selected.id ? { ...item, ...newData } : item)
          );
        });
        if (data.hasOwnProperty("success")) {
          window.$("#responsive-modal").modal("hide");
        }
      } catch (e) {
        console.log(e);
      }
    }
  };
  const _setValue = e => {
    setDepartment(prevState => {
      return {
        ...prevState,
        [e.target.name]: e.target.value
      };
    });
  };
  const _onEdit = useCallback((dep, index) => {
    setAction("Edit");
    setSelected({ id: dep.id, index });
    setDepartment({
      department_name: dep.department,
      department_code: dep.code
    });
    window.$("#responsive-modal").modal({ show: true });
  });
  const _onAddDepartment = () => {
    setAction("Add");
  };
  const _onDelete = useCallback((dep, index) => {
    swal({
      title: "Are you sure?",
      text: "Any data related to this department will also be deleted",
      icon: "warning",
      buttons: true,
      dangerMode: true
    }).then(async willDelete => {
      console.log('del then');
      if (willDelete) {
        try {
          const { data } = await axios.post(`/api/deleteDepartment/${dep.id}`);
          if (data.hasOwnProperty("success")) {
            setDepartments(() => {
              return departments.filter(item => item.id !== dep.id);
            });
            swal("Department deleted successfully", {
              icon: "success"
            });
          }
        } catch (e) {
          console.log(e);
        }
      }
    });
  });
  return (
    <div className="container-fluid">
      <div className="row bg-title">
        <div className="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 className="page-title">Departments</h4>
        </div>
        <div className="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol className="breadcrumb">
            <li>
              <a href="index.html">Dashboard</a>
            </li>
            <li className="active">Departments</li>
          </ol>
        </div>
      </div>
      {/* BODY START HERE */}
      <div className="row">
        <div className="col-md-12">
          <div className="white-box">
            <button
              onClick={_onAddDepartment}
              className="fcbtn btn btn-success btn-1f"
              data-toggle="modal"
              data-target="#responsive-modal"
            >
              <i className="fa fa-edit" /> Add Department
            </button>
          </div>
        </div>
      </div>
      <div className="row">
        <div className="col-sm-12">
          <div className="white-box">
            <div className="table-responsive">
              <table className="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Departments</th>
                    <th>Department Code</th>
                    <th>Total Members</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  {departments.map((dep, index) =>
                    <tr key={String(dep.id)}>
                      <td>
                        {index + 1}
                      </td>
                      <td>
                        {dep.department}
                      </td>
                      <td>
                        {dep.code}
                      </td>
                      <td>01</td>
                      <td>
                        <button
                          type="button"
                          onClick={() => _onEdit(dep, index)}
                          className="fcbtn btn btn-success btn-1f"
                        >
                          <i className="fa fa-edit" /> Edit
                        </button>
                        <button
                          onClick={() => _onDelete(dep, index)}
                          className="fcbtn btn btn-danger btn-1f"
                        >
                          <i className="fa fa-minus-square" /> Delete
                        </button>
                      </td>
                    </tr>
                  )}
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div
          id="responsive-modal"
          className="modal"
          tabIndex={-1}
          role="dialog"
          aria-labelledby="myModalLabel"
          aria-hidden="true"
          style={{ display: "none" }}
        >
          <div className="modal-dialog">
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
                <h4 className="modal-title">{action} Department</h4>{" "}
              </div>
              <form onSubmit={_onFormSubmit}>
                <div className="modal-body">
                  <div className="form-group">
                    <label htmlFor="recipient-name" className="control-label">
                      Department Name
                    </label>
                    <input
                      onChange={_setValue}
                      value={department.department_name}
                      type="text"
                      name="department_name"
                      className="form-control"
                      id="recipient-name"
                      required
                    />
                  </div>
                  <div className="form-group">
                    <label htmlFor="message-text" className="control-label">
                      Department Code
                    </label>
                    <input
                      onChange={_setValue}
                      value={department.department_code}
                      type="text"
                      name="department_code"
                      className="form-control"
                      id="recipient-name"
                      required
                    />
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
                    {action} Department
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

if (domElement) {
  render(<Department />, domElement);
}

export default Department;
