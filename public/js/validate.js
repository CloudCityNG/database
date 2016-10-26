$(document).ready(function () {
   $('#addForm').validate({
       rules: {
           student_number: {
               required: true
           },
           firstname: {
               required: true
           },
           lastname: {
               required: true
           },
           address: {
               required: true
           },
           state_or_province: {
               required: true
           },
           phone_number: {
               required: true,
               digits: true
           },
           email_name: {
               required: true,
               email: true
           },
           major: {
               required: true
           }
       },
       messages: {
           student_number: "Hãy điền mã sinh viên",
           firstname: "Hãy điền tên sinh viên",
           lastname: "Hãy điền họ sinh viên",
           email_name: {
               required: "Hãy điền email",
               email: "Định dạng email không đúng"
           }
       }
   });

});