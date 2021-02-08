<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laptopify | Contact Us</title>
    <link rel="stylesheet" href="contactStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="container-text">
            <h1>Connect with us</h1>
            <h2>We would love to respond to any problems or feedback you present to us.<br>Feel free to get in touch.
            </h2>
        </div>

        <div class="contact-box">

            <div class="contact-left">
                <h3>Send your request</h3>
                <form>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="Enter your name">
                        </div>
                        <div class="input-group">
                            <label>Phone number</label>
                            <input type="text" placeholder="Enter your Phone number">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your Email">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" placeholder="Enter topic subject">
                        </div>
                    </div>

                    <label>Message</label>
                    <textarea rows="5" placeholder="Enter your message"></textarea>

                    <button type="sumbit">Send</button>
                    <form>
                    <button formaction="{{url('/')}}" type="submit" class="fas fa-search">Home</button>
                    </form>
                </form>
            </div>

            <div class="contact-right">
                <h3>Reach us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>Support@Laptopify.com</td>
                    </tr>
                    <tr>
                        <td>Phone number</td>
                        <td>+20-12-34567890</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>10, Fawzy Moaz, Smouha <br> Alexandria, Egypt</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
