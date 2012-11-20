[%  META
      title = 'Home'
      type  = 'html'
%]
<div id="main" class="container_12">

    <div class="grid_6">
[% PROCESS "welcome" %]

        <hr />
      <h2>Upcoming Events</h2>

[% events(5, "events_html") %]

      <p>See more events on the <a href="[% site.uris.events %]">events page</a>.</p>

            <p>Our grand opening is currently featured on <a href="http://ittcs.wordpress.com/2012/06/03/brandon-florida-celebrates-grand-reopening-20th-anniversary-at-workshop/">The Tiger's Mouth</a>:</p>
            <blockquote>The Brandon, Florida, branch celebrated the completion of extensive renovations to our building with a Grand Reopening ribbon-cutting ceremony and refreshments Friday evening May 25, 2012. A blue lion danced in, bringing good fortune and good wishes from the International and National TTCS dignitaries in attendance. </blockquote>
            <p>Be sure to read <a href="http://ittcs.wordpress.com/2012/06/03/brandon-florida-celebrates-grand-reopening-20th-anniversary-at-workshop/">the whole article</a>. There are pictures as well!<p>

    </div>
    <div class="grid_6">

[% PROCESS "emptystep" %]

    <hr />
      [% pdf_thumb("2012-12-09-holiday-party") %]


    </div>
</div>

