[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">
[% PROCESS "welcome" %]
        <hr />

      <p id="p-emptystep"><span class="leader">The Empty Step</span> &middot; The <a href="http://dunedin.florida.usa.taoist.org/pdf/201206issue35.pdf">June 2012 edition</a> is now available!  Previous issues are also <a href="http://dunedin.florida.usa.taoist.org/archive.php">available from the archive</a>.</p>
    </div>


    <div class="grid_6">
      <h2>Upcoming Branch Events</h2>

[% events(5, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>

    </div>
</div>

