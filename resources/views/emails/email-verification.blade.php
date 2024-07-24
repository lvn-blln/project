<style>
    html,
    body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    font-family: 'mtFontII', sans-serif;
    font-size: 14px !important;
    margin-bottom: 10px !important;
    line-height: 24px;
    color: #8094ae;
    font-weight: 400 !important;
    }
    * {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
    margin: 0;
    padding: 0;
    }
    table,
    td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
    }
    table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
    }
    table table table {
    table-layout: auto;
    }
    a {
    text-decoration: none;
    }
    img {
    -ms-interpolation-mode:bicubic;
    }
</style>

    <center style='width: 100%; background-color: #f5f6fa;'>
        <table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#f0f0f0'>
            <tr>
                <td style='padding: 40px 0;'>
                    <table style='width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;'>
                        <tbody>
                            <tr>
                                <td style='padding: 30px 30px 15px 30px;'>
                                    <h2 style='margin: 0;'>{{$data['subject'] }}</h2>
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 30px 20px;'>
                                    <p style='margin-bottom: 10px;'>Hello <b> {{ $data['firstname'] }}, </b></p>

                                    <p style='margin-bottom: 10px;'>Here is your One-Time Password to verify your Test APP account.
                                    If you didn't initiate this, please ignore this email</p>

                                    <h1 style='margin-bottom: 10px; display:flex; justify-content: center'>{{$data['otp'] }}<h1>
                                 </td>
                            </tr>
                        </tbody>
                    </table>
                     <br><br><br><br>


                    <center>
                        <table style='width:100%;max-width:620px;margin-top:0 auto;'>
                            <tbody>
                                <tr>
                                    <td style='text-align: center;'>
                                        <span style='font-size: 13px;'><strong>CONNECT WITH US:</strong></span>
                                        <br><br>

                                        <a href=''>
                                            <img style='height: 20px' src='https://reelfruit.com/images/files/ig.png' alt='IG'>
                                        </a>

                                        <a href=''>
                                            <img style='height: 20px' src='https://reelfruit.com/images/files/tw.png' alt='twitter'>
                                        </a>

                                        <a href=''>
                                            <img style='height: 20px' src='https://reelfruit.com/images/files/IN.png' alt='linkedin'>
                                        </a>
                        
                                        <a href=''>
                                            <img style='height: 20px' src='https://reelfruit.com/images/files/fb2.png' alt='facebook'>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                </td>
            </tr>
        </table>
    </center>