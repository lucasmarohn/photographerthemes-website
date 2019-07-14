<?php 

function my_login_logo() { ?>
    <style type="text/css">
        html body {
            background: ##FAFAFA;
        }
        #loginform {
            background: #FFFFFF;
            box-shadow: 0 1rem 1rem rgba(0,0,0,.05), 0 2rem 7rem rgba(0,0,0,.05);
            border-radius: 5px;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/img/logotype.svg);
            height: 50px;
            width: 300px;
            background-size: contain;
            background-repeat: no-repeat;
        	margin-bottom: 20px;
        }

        #login .button-primary {
            background: #00b48c;
            border: 0px;
            box-shadow: 0 .5rem .5rem rgba(0,180,140,.2);
            text-shadow: 0 1px 1px rgba(0,90,70,.6);
            transition: background-color .1s ease-in-out;
        }
        #login .button-primary:hover {
            background: rgba(0,200,150);
        }
        #login input:focus {
            border-color: #00b48c;
        }

        #login .message {
            border-color: #00b48c;
        }
        #login #backtoblog a:hover,
        #login #nav a:hover {
            color: rgba(0,180,140,1);
        }
    </style>
<?php } 
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return get_home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'PhotographerThemes';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>