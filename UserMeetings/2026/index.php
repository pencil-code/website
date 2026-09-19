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
.pcum p  { margin: 0 0 14px 0; }
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
.pcum-cta-note { margin: 0 0 14px 0; font-size: 0.85em; color: var(--muted); }
.pcum-cta-note em { font-style: normal; font-weight: 600; color: var(--ink); }

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

/* Sub-heading inside a section */
.pcum h4.pcum-sub {
  margin: 26px 0 9px 0;
  font-size: 1.02em;
  font-weight: 700;
  color: var(--ink);
}
.pcum h4.pcum-sub:first-of-type { margin-top: 4px; }

/* Venue card */
.pcum-venue {
  margin: 0 0 16px 0;
  padding: 15px 18px;
  background: var(--wash);
  border: 1px solid var(--rule);
  border-radius: 6px;
  line-height: 1.5;
}
.pcum-venue .maps { display: block; margin-top: 10px; font-size: 0.85em; color: var(--muted); }
.pcum-venue .maps strong { display: block; margin-top: 3px; color: var(--ink); }

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
  max-width: none;
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
Technical and scientific presentations, workshops, and open discussions on the Pencil Code, with dedicated sessions for collaborative coding and individual consultations.
</p>

<!-- KEY FACTS -->
<dl class="pcum-facts">
  <div>
    <dt>Dates</dt>
    <dd>21&ndash;25 Sept 2026</dd>
  </div>
  <div>
    <dt>Venue</dt>
    <dd>University of Alicante<span>San Vicente del Raspeig, Spain</span></dd> 
  </div>
  <div>
    <dt>Format</dt>
    <dd>Hybrid<span>In person and online</span></dd>
  </div>
  <div>
    <dt>Registration</dt>
    <dd>Free of charge<span>Closed</span></dd>
  </div>
</dl>

<p style="margin-top:22px;">
All sessions, including the tutorials for those new to the Pencil Code, can be followed in person or online.
</p>

<!-- PROGRAMME -->
<h3 class="pcum-h">Programme</h3>
<p>
The full programme &ndash; talks, tutorials and collaborative coding sessions from Monday 21 to Friday 25 September &ndash; is available as a one-page PDF.
</p>
<a class="pcum-cta" href="PCUM2026.pdf" target="_blank" rel="noopener">View the programme (PDF)</a>
<p class="pcum-cta-note">Last updated 17 September 2026; please check back for changes.</p>

<!-- ATTENDING ONLINE -->
<h3 class="pcum-h">Attending online</h3>
<p>
The same Zoom link is used for every session, Monday 21 to Friday 25 September. We will also aim to record the sessions, so that anyone who cannot make a particular talk can catch up afterwards.
</p>
<a class="pcum-cta" href="https://stockholmuniversity.zoom.us/j/69160607217" target="_blank" rel="noopener">Join on Zoom</a>
<p class="pcum-cta-note">Meeting ID: 691 6060 7217 &middot; Hosted by Stockholm University. All times are local (CEST, UTC+2).</p>

<!-- SOCIAL ACTIVITIES -->
<h3 class="pcum-h">Social activities</h3>
<p>
The social activities taking place during the week &ndash; the beach and an evening out on Sunday, the excursion to Santa B&aacute;rbara Castle on Tuesday afternoon, and the social dinner on Thursday &ndash; are described in detail in the PDF below, together with a few recommendations for the weekend and a note on what to pack.
</p>
<a class="pcum-cta" href="PCUM2026_Social.pdf" target="_blank" rel="noopener">View social activities (PDF)</a>
<p class="pcum-cta-note">Please note that the social dinner is not covered by the meeting.</p>

<!-- REGISTRATION (closed) -->
 <!--
<h3 class="pcum-h">Registration</h3>
<p>
Registration is free of charge and open to all. The meeting can also be attended online, and a Zoom link will be circulated in due time. If you are new to the Pencil Code, tutorial sessions will be available in person and online.
</p>
<a class="pcum-cta" href="https://docs.google.com/forms/d/e/1FAIpQLSdWkVAHUsBLANDjyNDBXh-0rCXKdiTA_GeCclYPCQOVD34Caw/viewform?usp=publish-editor" target="_blank">Register for PCUM 2026</a>
-->


<!-- GETTING HERE -->
<h3 class="pcum-h">Getting here</h3>

<h4 class="pcum-sub">Arriving in Alicante</h4>
<p>
<strong>By air.</strong> The nearest airport is <a href="https://www.aena.es/en/alicante-elche-miguel-hernandez.html" target="_blank" rel="noopener">Alicante&#8209;Elche Miguel Hern&aacute;ndez Airport (ALC)</a>, about 10&nbsp;km from the city. The <strong>C&#8209;6 bus</strong> leaves from outside the terminal and runs to the city centre roughly every 20 minutes, taking about 25 minutes.
</p>
<p>
<strong>By train.</strong> Long-distance and high-speed trains (including the AVE from Madrid) arrive at <strong>Alicante&nbsp;Terminal</strong> (Alacant Terminal) on Avenida de Salamanca, in the city centre. From the station it is a walk of about six minutes along Avenida de la Estaci&oacute;n to the <strong>Luceros</strong> tram stop.
</p>

<h4 class="pcum-sub">Getting to the university</h4>
<p>
From the city centre, take <strong>TRAM line L2</strong> towards San Vicente del Raspeig and get off at <strong>Universitat</strong>; the line runs from both <strong>Luceros</strong> and <strong>Mercat</strong>, and the ride takes about 20 minutes. <strong>Bus 24</strong> also reaches the campus and, at the university end, stops right next to the tram stop. From there it is about a ten-minute walk across the campus to the building.
</p>

<div class="pcum-venue">
  <strong>Sala de Juntas</strong>, first floor<br>
  Facultad de Ciencias II &mdash; <strong>Edificio 07</strong><br>
  Universidad de Alicante, 03690 San Vicente del Raspeig
  <span class="maps">Search this exactly in Maps:
  <strong>Edificio 07 - Ciencias 2, Universidad De Alicante, 03690 San Vicente del Raspeig, Alicante</strong></span>
</div>

<p>
The campus is large and the buildings look alike, so detailed directions &ndash; with the walking route from the tram stop, photographs of the building and of the signs to follow once you are there &ndash; are collected in the PDF below.
</p>
<a class="pcum-cta" href="PCUM2026_gettingthere.pdf" target="_blank" rel="noopener">How to reach the room (PDF)</a>

<table class="pcum-table" style="margin-top:20px;">
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
  <li><span class="n">Elisa Mema</span><span class="a">NORDITA, Sweden</span></li>
  <li><span class="n">Antonino S. Midiri</span><span class="a">University of Geneva, Switzerland</span></li>
  <li><span class="n">Touko Puro</span><span class="a">Aalto University, Finland</span></li>
  <li><span class="n">Barshan Ray</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Matthias Rheinhardt</span><span class="a">Aalto University, Finland</span></li>
  <li><span class="n">Alberto Roper Pol</span><span class="a">University of Geneva, Switzerland</span></li>
  <li><span class="n">Sauvan Sau <span class="online">Online</span></span><span class="a">IIT Guwahati, India</span></li>
  <li><span class="n">Jennifer Schober</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Ramkishor Sharma <span class="online">Online</span></span><span class="a">University of Hyderabad, India</span></li>
  <li><span class="n">Vasco Silver</span><span class="a">University of Bonn, Germany</span></li>
  <li><span class="n">Isak Stomberg</span><span class="a">Institute of Corpuscular Physics, Spain</span></li>
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