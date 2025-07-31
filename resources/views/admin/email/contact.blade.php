
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
                        <td><h3>Vous avez un message venant du site</h3></td>
                    </tr>
                    <tr>
                        <td>Object :  {{ $data['subject']}}   </td>
                    </tr>
                    <tr>
                        <td>Nom :  {{ $data['name']}}   </td>
                    </tr>
                    <tr>
                        <td>
                            Email : {{$data['email']}} 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Telephone : {{$data['phone']}} 
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Message :
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$data['message']}} 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
</body>
</html>