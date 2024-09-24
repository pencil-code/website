;$Id: add3.tex,v 1.602 2024/06/23 09:17:17 brandenb Exp $
if !d.name eq 'PS' then begin
  device,xsize=18,ysize=12,yoffset=3
  !p.charthick=3 & !p.thick=3 & !x.thick=3 & !y.thick=3
end
;
!p.charsize=1.7
!x.margin=[7.8,.5]
!y.margin=[3.2,.5]
;
!x.title='year'
!y.title='number'
file='users.txt'
a=rtable(file,2)
n=reform(a[0,*])
y=reform(a[1,*])
plot,y,n,ps=10,yr=[0,5.2],xr=[2000,2025]
;
print,"$mv idl.ps pusers.eps"
print,"$epstopdf pusers.eps"
END
