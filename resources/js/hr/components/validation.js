const validate = require('validate.js');

const registerConstraints = {
  name: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
  email: {
    email: {
      message: "doesn't look like a valid email",
    },
  },
  password: {
    length: {
      minimum: 8,
      tooShort: 'should be minimum %{count} characters',
    },
  },
  confirmPassword: {
    equality: 'password',
  },
  department_id: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
};

const resetPassword = {
  email: {
    email: {
      message: "doesn't look like a valid email",
    },
  },
};
const tokenConstraints = {
  otp: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
};

const passwordChange = {
  password: {
    length: {
      minimum: 8,
      tooShort: 'should be minimum %{count} characters',
    },
  },
  confirmPassword: {
    equality: 'password',
  },
};

const passwordChangConstraints = {
  currentPassword: {
    length: {
      minimum: 8,
      tooShort: 'should be minimum %{count} characters',
    },
  },
  newPassword: {
    length: {
      minimum: 8,
      tooShort: 'should be minimum %{count} characters',
    },
  },
  confirmPassword: {
    equality: 'newPassword',
  },
};

const editProfileConstraints = {
  firstName: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
  lastName: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
  email: {
    email: {
      message: "doesn't look like a valid email",
    },
  },
  location: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
  dateOfBirth: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
  shortBio: {
    presence: {
      allowEmpty: false,
      message: 'is required',
    },
  },
};

const emailConstraints = {
  email: {
    email: {
      message: "doesn't look like a valid email",
    },
  },
};

export const validateLogin = async (email, password) => {
  return await validate({email, password}, loginValidationConstraints);
};
export const validateCreateUser = async ({name, email, password, confirmPassword, department_id}) => {
  return await validate(
    {name, email, password, confirmPassword, department_id},
    registerConstraints,
    {format: 'grouped'}
  );
};
export const validateEmail = async email => {
  return await validate({email}, emailConstraints);
};
export const validateOtp = async otp => {
  return await validate({otp}, tokenConstraints);
};
export const validateResetPassword = async (password, confirmPassword) => {
  return await validate({password, confirmPassword}, passwordChange);
};
export const validateEditProfile = async (
  firstName,
  lastName,
  email,
  location,
  dateOfBirth,
  shortBio,
) => {
  return await validate(
    {firstName, lastName, email, location, dateOfBirth, shortBio},
    editProfileConstraints,
  );
};
export const validateChangePassword = async (
  currentPassword,
  newPassword,
  confirmPassword,
) => {
  return await validate(
    {currentPassword, newPassword, confirmPassword},
    passwordChangConstraints,
  );
};