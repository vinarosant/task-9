<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> 
    <style type = "text/css">
        input.error{
        border: 1px solid red;
        }
    </style>
</head>
<body>
<form id = "form_tambah" action="proses_tambah.php" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name ="first_name"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name ="last_name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name ="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name ="phone"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name ="address"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" id ="submit" name ="submit" value="Tambah"></td>
        </tr>
    </table>
</form>
</body>
</html>

<script>
  $(document).ready(function () {
    $('#form_tambah').validate({
      rules: {
        first_name: {
          required: true,
        },
        last_name: {
          required: true,
        },
        email: {
          required: true,
        },
        phone: {
          required: true,

        },
        address: {
          required: true,
        }
      },
      messages: {
        first_name: {
          required: ' First name is required',
        },
        last_name: {
          required: ' Last name is required',
        },
        email: {
          required: ' Email is required',
        },
        phone: {
          required: ' Phone is required',
        },
        address: {
          required: ' Address is required',
        }
      },
      submitHandler: function (form) {
        form.submit();
      }
    });
  });
</script>