<style type="text/css">
 .navbar.navbar-fixed-top.fixed-theme {
    background-color: #F7F7F7;
    border-color: #080808;
    box-shadow: 0 0 5px rgba(0,0,0,.8);
 }

 .navbar-brand.fixed-theme {
    font-size: 18px;
 }

 .navbar-container.fixed-theme {
    padding: 0;
 }

 .navbar-brand.fixed-theme,
 .navbar-container.fixed-theme,
 .navbar.navbar-fixed-top.fixed-theme,
 .navbar-brand,
 .navbar-container{
    transition: 0.8s;
    -webkit-transition:  0.8s;
 }
</style>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
    window.alert = function(){};
    var defaultCSS = document.getElementById('bootstrap-css');
    function changeCSS(css){
        if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
        else $('head > link').filter(':first').replaceWith(defaultCSS); 
    }
    $( document ).ready(function() {
        var iframe_height = parseInt($('html').height()); 
        window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
    });
</script>

<!-- Fixed navbar -->
<nav id="header" class="navbar navbar-fixed-top">
    <div id="header-container" class="container navbar-container">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="active"><a href="#">Practice Areas</a></li>
                <li><a href="#about">About Us</a></li>
                <li class="active"><a href="#">Blog</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
<br>

<script type="text/javascript">
    $(document).ready(function(){

/**
 * This object controls the nav bar. Implement the add and remove
 * action over the elements of the nav bar that we want to change.
 *
 * @type {{flagAdd: boolean, elements: string[], add: Function, remove: Function}}
 */
 var myNavBar = {

    flagAdd: true,

    elements: [],

    init: function (elements) {
        this.elements = elements;
    },

    add : function() {
        if(this.flagAdd) {
            for(var i=0; i < this.elements.length; i++) {
                document.getElementById(this.elements[i]).className += " fixed-theme";
            }
            this.flagAdd = false;
        }
    },

    remove: function() {
        for(var i=0; i < this.elements.length; i++) {
            document.getElementById(this.elements[i]).className =
            document.getElementById(this.elements[i]).className.replace( /(?:^|\s)fixed-theme(?!\S)/g , '' );
        }
        this.flagAdd = true;
    }

 };

/**
 * Init the object. Pass the object the array of elements
 * that we want to change when the scroll goes down
 */
 myNavBar.init(  [
    "header",
    "header-container",
    "brand"
    ]);

/**
 * Function that manage the direction
 * of the scroll
 */
 function offSetManager(){

    var yOffset = 0;
    var currYOffSet = window.pageYOffset;

    if(yOffset < currYOffSet) {
        myNavBar.add();
    }
    else if(currYOffSet == yOffset){
        myNavBar.remove();
    }

 }

/**
 * bind to the document scroll detection
 */
 window.onscroll = function(e) {
    offSetManager();
 }

/**
 * We have to do a first detectation of offset because the page
 * could be load with scroll down set.
 */
 offSetManager();
});
</script>