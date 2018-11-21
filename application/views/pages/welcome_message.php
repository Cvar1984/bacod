<style type="text/css">
    .modal-dialog {
        margin: 0 auto;
        padding: 4px;
        text-align: center;
        font-family: 'Ubuntu mono';
        letter-spacing: 2px;
    }

    .modal-dialog h1 {
        margin-top: 24%;
        font-weight: bold;
        color: #000;
    }
    .modal-dialog h4 {
        font-weight: lighter;
        color: #888;
    }
</style>
<body class="modal-body">
    <div class="modal-dialog">
        <h1>Welcome to { $bacod }</h1>
        <h4>Let's code with love!</h4>
        <a href="<?=site_url('chat');?>">
            <input type="submit" class="btn btn-success btn-sm" value="Get Started"/>
        </a>
    </div>
</body>
