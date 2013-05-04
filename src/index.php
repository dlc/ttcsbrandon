[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">

[% PROCESS "welcome" %]

        <hr />

    <p id="p-1"><span class="leader">Tampa Tribune Article</span> &middot; John Ceballos from the Tampa Tribune <a href="http://www2.tbo.com/news/brandon/2013/mar/07/taoist-tai-chi-offers-a-variety-of-health-benefits-ar-652286/" title="&quot;Taoist Tai Chi offers a variety of health benefit&quot;, March 07, 2013">published an article about our center</a>, which features interviews with a few of our members, and provides a little history and a lot of exposure. There are even a few pictures.</p>

    <p><a href="http://www2.tbo.com/news/brandon/2013/mar/07/taoist-tai-chi-offers-a-variety-of-health-benefits-ar-652286/" title="&quot;Taoist Tai Chi offers a variety of health benefit&quot;, March 07, 2013"><img src="[% site.uris.images %]/tbo.jpg" alt="Members practicing the tai chi form"></a></p>

        <hr />

[% PROCESS "emptystep" %]

    </div>
    <div class="grid_6">

[% pdf_thumb("2013-05-25-international-workshop", "International Tai Chi Workshop, May 25-26, 2013") %]

        <hr />

      <h2>Upcoming Events</h2>

[% events(3, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>



    </div>
</div>

