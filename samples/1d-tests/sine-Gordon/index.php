<!-- $Id$ -->
<?php
	include "inc/header.inc";
 ?>
<div class="centcolumnpad">
<h2>Solitons from the sine-Gordon equation</h2>
<h3><tt>samples/sine-Gordon</tt></h3>
In src/Makefile.local, we set "SPECIAL = special/klein_gordon" to invoke the Klein-Gordon module.
In run.in, we put Vprime_choice='cos-profile', phimass=2., lambda_phi=1.
Looking into the subroutine "calc_pencils_special", we see that
<ul>
  p%Vprime=phimass2*lambda_phi*sin(lambda_phi*p%phi)
</ul>
Here, Vprime refers to the derivative of the potential, so a cosine potential 'cos-profile' means a sine function in the equation.
Furthermore, phimass2=phimass**2 is a shorthand and "phimass=2." along with "lambda_phi=1." are inputs.

As initial condition, we have "initspecial='phi=atan_exp_kx'".
In the code, it says that this means
<ul>
  phi=4.*amplphi*atan(exp(phi_gam*kx_phi*(x-offset))),
</ul>
where "phi_gam=1./sqrt(1.-phi_v**2)" is an effective wavenumber, as explained in the wikipedia page.
Here, "phi_v=.9" is an input parameter in start.in, and "kx_phi=2." is another one.

There is an additional amplphi factor that is put to unity.
<?php
	include "inc/footer.inc";
 ?>
