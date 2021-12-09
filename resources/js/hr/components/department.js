const axios = require('axios');

$('.departmentSubmit').on('click', () => {
    const departmentName = $('input[name="department_name"]').val();
    const departmentCode = $('input[name="department_code"]').val();
    if(departmentName === "" || departmentCode === ""){
        console.log("both fields are required");
        return;
    }
    console.log("end of function");
})