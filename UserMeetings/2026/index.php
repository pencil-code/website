<?php
    set_include_path ("../../");
    include "inc/header.inc";
?>
<style>
/* ---- PCUM 2026 page styles ---------------------------------------- */
.pcum {
  --ink:      #24313a;
  --muted:    #6b7a83;
  --accent:   #536066;
  --rule:     #e3e8ea;
  --wash:     #f6f8f9;
  color: var(--ink);
  line-height: 1.6;
}
.pcum h2.pcum-title {
  margin: 0 0 6px 0;
  font-size: 1.9em;
  line-height: 1.25;
  letter-spacing: -0.01em;
}
.pcum .pcum-standfirst {
  margin: 0 0 28px 0;
  max-width: 62ch;
  color: var(--muted);
  font-size: 1.02em;
}
.pcum h3.pcum-h {
  margin: 40px 0 14px 0;
  font-size: 0.78em;
  font-weight: 700;
  letter-spacing: 0.11em;
  text-transform: uppercase;
  color: var(--accent);
}
.pcum h3.pcum-h::after {
  content: "";
  display: block;
  width: 34px;
  height: 2px;
  margin-top: 7px;
  background: var(--accent);
}
.pcum p  { margin: 0 0 14px 0; max-width: 68ch; }
.pcum ul { margin: 0 0 14px 0; padding-left: 1.15em; }
.pcum li { margin-bottom: 5px; }
.pcum a  { color: #2f6b86; }

/* Key facts card */
.pcum-facts {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(155px, 1fr));
  gap: 1px;
  margin: 0 0 8px 0;
  background: var(--rule);
  border: 1px solid var(--rule);
  border-radius: 6px;
  overflow: hidden;
}
.pcum-facts div { background: #fff; padding: 16px 18px; }
.pcum-facts dt {
  margin: 0 0 5px 0;
  font-size: 0.72em;
  font-weight: 700;
  letter-spacing: 0.09em;
  text-transform: uppercase;
  color: var(--muted);
}
.pcum-facts dd { margin: 0; font-size: 1.02em; font-weight: 600; }
.pcum-facts dd span { display: block; font-weight: 400; font-size: 0.88em; color: var(--muted); }

/* Call to action */
.pcum-cta {
  display: inline-block;
  margin: 4px 0 14px 0;
  padding: 11px 22px;
  background: var(--accent);
  color: #fff !important;
  border-radius: 5px;
  font-weight: 600;
  text-decoration: none;
}
.pcum-cta:hover { background: #3f4a4f; }

/* Two-column split */
.pcum-split { display: flex; flex-wrap: wrap; gap: 26px; align-items: stretch; }
.pcum-split > * { flex: 1 1 300px; min-width: 0; }
.pcum-split .pcum-figure { display: flex; flex-direction: column; }
.pcum-split .pcum-figure a { flex: 1; display: flex; min-height: 320px; }
.pcum-split .pcum-figure img { height: 100%; object-fit: cover; }

/* Transport table */
.pcum-table { width: 100%; border-collapse: collapse; margin: 0 0 18px 0; font-size: 0.94em; }
.pcum-table caption {
  caption-side: top;
  text-align: left;
  padding: 0 0 7px 0;
  font-weight: 600;
  color: var(--ink);
}
.pcum-table th, .pcum-table td { padding: 8px 10px; text-align: left; border-bottom: 1px solid var(--rule); }
.pcum-table thead th {
  font-size: 0.76em;
  letter-spacing: 0.07em;
  text-transform: uppercase;
  color: var(--muted);
  border-bottom: 1px solid #cfd8dc;
}
.pcum-table td:first-child { font-weight: 600; white-space: nowrap; }

.pcum-figure img {
  width: 100%;
  height: auto;
  display: block;
  border: 1px solid var(--rule);
  border-radius: 6px;
}

/* Participants */
.pcum-people {
  list-style: none;
  margin: 0;
  padding: 0;
  columns: 2;
  column-gap: 34px;
}
@media (max-width: 620px) { .pcum-people { columns: 1; } }
.pcum-people li {
  break-inside: avoid;
  margin: 0 0 11px 0;
  padding: 0;
}
.pcum-people .n { display: block; font-weight: 600; }
.pcum-people .a { display: block; font-size: 0.88em; color: var(--muted); }
.pcum-people .online {
  display: inline-block;
  margin-left: 6px;
  padding: 1px 6px;
  border: 1px solid #c3d3da;
  border-radius: 3px;
  background: var(--wash);
  font-size: 0.68em;
  font-weight: 600;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--muted);
  vertical-align: 1px;
}

.pcum-ack {
  margin: 46px 0 0 0;
  padding-top: 16px;
  border-top: 1px solid var(--rule);
  font-size: 0.84em;
  font-style: italic;
  color: var(--muted);
  line-height: 1.55;
}
.pcum-credit { margin-top: 6px; font-size: 0.8em; font-style: italic; color: var(--muted); }
</style>

<div class="centcolumnpad pcum">

<!-- HEADER -->
<h2 class="pcum-title">22<sup>nd</sup> Pencil Code User Meeting 2026</h2>
<p class="pcum-standfirst">
Technical and scientific presentations, workshops and open discussions on the Pencil Code, with dedicated sessions for collaborative coding and individual consultations.
</p>

<!-- KEY FACTS -->
<dl class="pcum-facts">
  <div>
    <dt>Dates</dt>
    <dd>21&ndash;25 September 2026</dd>
  </div>
  <div>
    <dt>Venue</dt>
    <dd>University of Alicante<span>Alicante, Spain</span></dd>
  </div>
  <div>
    <dt>Format</dt>
    <dd>Hybrid<span>In person and online</span></dd>
  </div>
  <div>
    <dt>Registration</dt>
    <dd>Free of charge</dd>
  </div>
</dl>

<!-- REGISTRATION -->
<h3 class="pcum-h">Registration</h3>
<p>
Registration is free of charge and open to all. The meeting can also be attended online, and a Zoom link will be circulated in due time. If you are new to the Pencil Code, tutorial sessions will be available in person and online.
</p>
<a class="pcum-cta" href="https://docs.google.com/forms/d/e/1FAIpQLSdWkVAHUsBLANDjyNDBXh-0rCXKdiTA_GeCclYPCQOVD34Caw/viewform?usp=publish-editor" target="_blank">Register for PCUM 2026</a>

<!-- GETTING HERE -->
<h3 class="pcum-h">Getting here</h3>
<div class="pcum-split">
  <div>
    <p>
      The recommended airport is <a href="https://www.aena.es/es/alicante-elche-miguel-hernandez.html" target="_blank">Alicante&#8209;Elche Airport (ALC)</a>. Take the <strong>C&#8209;6 bus</strong> from the airport to Alicante city centre, then reach the campus by <strong>Bus 24</strong> or <strong>TRAM Line L2</strong>.
    </p>

    <table class="pcum-table">
      <caption>Last services in the evening</caption>
      <thead>
        <tr><th>Service</th><th>Departs</th><th>From</th></tr>
      </thead>
      <tbody>
        <tr><td colspan="3" style="padding-top:12px; font-weight:600; color:#6b7a83; font-size:0.85em; letter-spacing:0.05em; text-transform:uppercase; border-bottom:none;">City centre &rarr; Campus</td></tr>
        <tr><td>Tram L2</td><td>22:56</td><td>Mercat</td></tr>
        <tr><td>Bus 24</td><td>22:39</td><td>Mercado&#8209;San Vicente</td></tr>
        <tr><td colspan="3" style="padding-top:14px; font-weight:600; color:#6b7a83; font-size:0.85em; letter-spacing:0.05em; text-transform:uppercase; border-bottom:none;">Campus &rarr; City centre</td></tr>
        <tr><td>Tram L2</td><td>23:25</td><td>Universitat</td></tr>
        <tr><td>Bus 24</td><td>22:47</td><td>Calle Per&uacute; 4</td></tr>
      </tbody>
    </table>
  </div>

  <div class="pcum-figure">
    <a href="map_venue.png" target="_blank">
      <img src="map_venue.png" alt="Map of the University of Alicante campus">
    </a>
  </div>
</div>

<!-- ACCOMMODATION -->
<h3 class="pcum-h">Accommodation</h3>
<p>
We recommend staying either in <strong>Alicante city centre</strong> or near the <strong>University campus</strong> in Sant Vicent del Raspeig. Early booking is advised, as September falls within Alicante's high tourist season.
</p>
<ul>
  <li><strong>Near the campus:</strong> <a href="https://www.villauniversitaria.com" target="_blank">Villa Universitaria Hotel</a>.</li>
  <li><strong>City centre:</strong> <a href="https://www.eurostarshotels.co.uk/eurostars-lucentum.html" target="_blank">Hotel Eurostars Lucentum</a> and <a href="https://www.themarkethostel.com" target="_blank">The Market Hostel</a>.</li>
  <li><strong>Further options:</strong> the <a href="https://web.ua.es/en/estidia22/accommodation.html" target="_blank">University's accommodation list</a> and <a href="https://www.booking.com" target="_blank">Booking.com</a>.</li>
</ul>

<!-- ORGANISER -->
<h3 class="pcum-h">Organiser</h3>
<p>
Clara Dehman, University of Alicante<br>
For any inquiries, please write to <a href="mailto:clara.dehman@ua.es">clara.dehman@ua.es</a>.
</p>

<!-- PARTICIPANTS -->
<h3 class="pcum-h">Participants</h3>
<ul class="pcum-people">
  <li><span class="n">Kent Barbey</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Philippe-A. Bourdin</span><span class="a">University of Graz, Austria</span></li>
  <li><span class="n">Axel Brandenburg</span><span class="a">NORDITA, Sweden</span></li>
  <li><span class="n">Simon Candelaresi</span><span class="a">University of Stuttgart, Germany</span></li>
  <li><span class="n">Mattia Cielo</span><span class="a">NORDITA, Sweden</span></li>
  <li><span class="n">Clara Dehman</span><span class="a">University of Alicante, Spain</span></li>
  <li><span class="n">Sahel Dey <span class="online">Online</span></span><span class="a">University of Newcastle, Australia</span></li>
  <li><span class="n">Maria C. Espinoza</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Deepen Garg</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Kishore Gopalakrishnan <span class="online">Online</span></span><span class="a">IIT Madras, India</span></li>
  <li><span class="n">Oksana Iarygina</span><span class="a">NORDITA, Sweden</span></li>
  <li><span class="n">Neco Kriel</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Vinay Kumar <span class="online">Online</span></span><span class="a">CTS-TIFR, Bangalore, India</span></li>
  <li><span class="n">Illa R. Losada <span class="online">Online</span></span><span class="a">NORDITA, Sweden</span></li>
  <li><span class="n">Antonino S. Midiri</span><span class="a">University of Geneva, Switzerland</span></li>
  <li><span class="n">Barshan Ray</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Matthias Rheinhardt</span><span class="a">Aalto University, Finland</span></li>
  <li><span class="n">Alberto Roper Pol</span><span class="a">University of Geneva, Switzerland</span></li>
  <li><span class="n">Sauvan Sau <span class="online">Online</span></span><span class="a">IIT Guwahati, India</span></li>
  <li><span class="n">Jennifer Schober</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Ramkishor Sharma <span class="online">Online</span></span><span class="a">University of Hyderabad, India</span></li>
  <li><span class="n">Vasco Silver</span><span class="a">University of Bonn, Germany</span></li>
</ul>

<!-- POSTER -->
<h3 class="pcum-h">Poster</h3>
<div class="pcum-figure">
  <a href="PCUM26.jpeg" target="_blank">
    <img src="PCUM26.jpeg" alt="PCUM 2026 poster">
  </a>
  <p class="pcum-credit">Photo credit: University of Alicante webpage and GetYourGuide.</p>
</div>

<!-- ACKNOWLEDGEMENTS -->
<p class="pcum-ack">
<em>Acknowledgements.</em> This meeting is supported by the Ministerio de Ciencia, Innovaci&oacute;n y Universidades through grant JDC2023-052227-I (PI: C. Dehman), and by the Conselleria d'Educaci&oacute;, Universitats i Ocupaci&oacute; de la Generalitat Valenciana through grant CIPROM/2022/13 (PI: J. A. Pons).
</p>

</div>
<?php
    include "inc/footer.inc";
?>