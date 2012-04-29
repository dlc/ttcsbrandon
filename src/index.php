[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_7">
[% PROCESS "welcome" %]

        <hr />

      <h2>Upcoming Branch Events</h2>

[% events(3, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>
      <hr/>

      <p id="p-emptystep"><span class="leader">The Empty Step</span> &middot; The <a href="http://dunedin.florida.usa.taoist.org/pdf/201204issue33.pdf">April 2012 edition</a> is now available!  Previous issues are also <a href="http://dunedin.florida.usa.taoist.org/archive.php">available from the archive</a>.</p>
    </div>

    <div class="grid_5">
      <a href="[% site.uris.pdfs %]/2012-05-05-openhouse.pdf"><img src="[% site.uris.images %]/thumbs/2012-05-05-openhouse.jpg" /></a>
      <!--a href="[% site.uris.pdfs %]/2012-05-25-grand-reopening.pdf"><img src="[% site.uris.images %]/thumbs/2012-05-25-grand-reopening.jpg" /></a-->
    </div>
</div>

