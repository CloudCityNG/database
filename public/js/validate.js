$(document).ready(function () {
   $('#form').validate({
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
           address: "Hãy nhập địa chỉ",
           state_or_province: "Hãy nhập tên thành phố",
           phone_number: {
               required: "Hãy nhập số điện thoại",
               digits: "Số điện thoại chỉ bao gồm số"
           },
           email_name: {
               required: "Hãy điền email",
               email: "Định dạng email không đúng"
           },
           major: "Hãy nhập tên khoa"
       }
   });

    $("input:text").focus(function() { $(this).select(); } );
});