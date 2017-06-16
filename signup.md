---
layout: default
---

<div id="alert-region"></div>
<div class="section centered last">
<div class="sub-section narrow">
<div class="mbm">
<a class="logo" href="{{ site.baseurl }}/"><img width="140" src="https://res.cloudinary.com/lmj6rf6tz/image/upload/v1497453042/elektropay/assets/img/logo.png" alt="Logo icon" />
</a></div>
<div id="main-region"></div>
<script>
  $(function() {
    Elektropay.app = new Elektropay.Apps.Landing();
    Elektropay.app.start({
      modules: {
        authentication: {"authenticity_token":"1fvWL5PRGJ\/03LK5ZgpuBDl9rxlG4FhxWapYnLPTmNfzWjmU3oPHD8hHgX0DD0joc8y6lrKVHbb23hcdkGbSag==","flow":"signup","state":null,"email":null,"name":null,"authentication":null,"invitation":null,"error":null}
      }
    });
  });
</script>

<script>
  window['_fs_debug'] = false;
  window['_fs_host'] = 'www.fullstory.com';
  window['_fs_org'] = 'rPp';
  (function(m,n,e,t,l,o,g,y){
    g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[];
    o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js';
    y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
    g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){FS(l,v)};
    g.setSessionVars=function(v){FS('session',v)};g.setPageVars=function(v){FS('page',v)};
  })(window,document,'FS','script','user');
</script>



</div>
</div>
<script>
  $(function() {
    new Elektropay.Landing.Metrics();
  });
</script>
