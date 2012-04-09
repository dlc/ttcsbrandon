[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="grid_12">

[% PROCESS "welcome" %]

        <hr/>

      <a href="[% site.uris.pdfs %]/2012-01-14-workshop.pdf"><img src="[% site.uris.images %]/thumbs/2012-01-14-workshop.jpg" class="floater"/></a>

      <h2>Upcoming Branch Events</h2>

[% events(3, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>
      <hr/>

      <p id="p-emptystep"><span class="leader">The Empty Step</span> &middot; The <a href="http://dunedin.florida.usa.taoist.org/pdf/201204issue33.pdf">April 2012 edition</a> is now available!  Previous issues are also <a href="http://dunedin.florida.usa.taoist.org/archive.php">available from the archive</a>.</p>
      <hr/>

      <hr />
</div>

