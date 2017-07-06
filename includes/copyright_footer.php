<style type="text/css">

  .fixed-c {
    background: #f8f8f8 url(../images/footer-bg.png) no-repeat bottom right;
    background-size: 80%;
    padding: 10px 0 40px;
    border-top: 1px solid #eee;
    position:fixed;
    left:0px;
    bottom:0px;
    height:30px;
    width:100%;
    border: none !important;
  }

  /* IE 6 */
  * html .fixed-c {
   position:absolute;
   top:expression((0-(footer.offsetHeight)+(document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight)+(ignoreMe = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop))+'px');
 }

</style>
<div class="fixed-c">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p><?= $copyright; ?></p>
      </div>
      <div class="col-md-4">
        <div class="f-social pull-right">
          <a class="fa fa-twitter" href="#"></a>
          <a class="fa fa-facebook" href="#"></a>
          <a class="fa fa-linkedin" href="#"></a>
          <a class="fa fa-google-plus" href="#"></a>
          <a class="fa fa-rss" href="#"></a>
        </div>
      </div>
    </div>
  </div>
</div>