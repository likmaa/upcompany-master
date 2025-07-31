<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div style="width: 600px; margin: 5% auto; padding: 5%; background: #f8f8f9;">
      <table width="100%">
          <tbody>
              <tr>
                  <td><h3>Un message vous a été envoyé depuis le site web</h3></td>
              </tr>
              <tr>
                  <td>Object :  {{ $subject}}   </td>
              </tr>
              <tr>
                  <td>Nom :  {{ $name }}   </td>
              </tr>
              <tr>
                  <td>
                      Email : {{$email}} 
                  </td>
              </tr>
              <tr>
                  <td>
                      Telephone : {{$telephone}} 
                  </td>
              </tr>
              <tr>
                  <td>
                      Message :
                  </td>
              </tr>
              <tr>
                  <td>
                      {{$msg}} 
                  </td>
              </tr>
          </tbody>
      </table>
  </div>
</body>
</html>