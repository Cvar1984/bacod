<title>Welcome</title>
    <style type="text/css">
        .well-lg {
            margin: 0 auto;
            padding: 4px;
            text-align: center;
            font-family: 'Ubuntu mono';
            letter-spacing: 2px;
        }

        .well-lg h1 {
            margin-top: 18%;
            font-weight: bold;
            color: #333;
        }
        .well-lg h4 {
            font-weight: lighter;
            color: gray;
        }
    </style>
<body>
    <div class="well-lg">
        <h1>Welcome to { $hello }</h1>
        <h4>Let's code with love!</h4>
        <a href="<?=base_url('index.php/chat');?>">
            <input type="submit" class="btn btn-success btn-sm" value="Get Started"/>
        </a>
    </div>
</body>
