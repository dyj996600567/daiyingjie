$(function(){function t(t){function e(){v=document.createElement("canvas"),M=v.getContext("2d"),v.style.top="0px",v.style.left="0px",v.style.pointerEvents="none",r?(v.style.position="absolute",u.appendChild(v),v.width=u.clientWidth,v.height=u.clientHeight):(v.style.position="fixed",document.body.appendChild(v),v.width=f,v.height=p),M.font="21px serif",M.textBaseline="middle",M.textAlign="center",d.forEach(t=>{let e=M.measureText(t),i=document.createElement("canvas"),n=i.getContext("2d");i.width=e.width,i.height=2*e.actualBoundingBoxAscent,n.textAlign="center",n.font="21px serif",n.textBaseline="middle",n.fillText(t,i.width/2,e.actualBoundingBoxAscent),w.push(i)}),i(),c()}function i(){u.addEventListener("mousemove",h,{passive:!0}),u.addEventListener("touchmove",o,{passive:!0}),u.addEventListener("touchstart",o,{passive:!0}),window.addEventListener("resize",n)}function n(t){f=window.innerWidth,p=window.innerHeight,r?(v.width=u.clientWidth,v.height=u.clientHeight):(v.width=f,v.height=p)}function o(t){if(t.touches.length>0)for(let e=0;e<t.touches.length;e++)s(t.touches[e].clientX,t.touches[e].clientY,w[Math.floor(Math.random()*w.length)])}function h(t){t.timeStamp-y<16||window.requestAnimationFrame(()=>{if(r){const e=u.getBoundingClientRect();m.x=t.clientX-e.left,m.y=t.clientY-e.top}else m.x=t.clientX,m.y=t.clientY;const e=Math.hypot(m.x-x.x,m.y-x.y);e>1&&(s(m.x,m.y,w[Math.floor(Math.random()*d.length)]),x.x=m.x,x.y=m.y,y=t.timeStamp)})}function s(t,e,i){g.push(new l(t,e,i))}function a(){M.clearRect(0,0,f,p);for(let t=0;t<g.length;t++)g[t].update(M);for(let t=g.length-1;t>=0;t--)g[t].lifeSpan<0&&g.splice(t,1)}function c(){a(),requestAnimationFrame(c)}function l(t,e,i){const n=Math.floor(60*Math.random()+80);this.initialLifeSpan=n,this.lifeSpan=n,this.velocity={x:(Math.random()<.5?-1:1)*(Math.random()/2),y:.4*Math.random()+.8},this.position={x:t,y:e},this.canv=i,this.update=function(t){this.position.x+=this.velocity.x,this.position.y+=this.velocity.y,this.lifeSpan--,this.velocity.y+=.05;const e=Math.max(this.lifeSpan/this.initialLifeSpan,0);t.drawImage(this.canv,this.position.x-this.canv.width/2*e,this.position.y-this.canv.height/2,this.canv.width*e,this.canv.height*e)}}const d=t&&t.emoji||["😀","😂","😆","😊"];let r=t&&t.element,u=r||document.body,f=window.innerWidth,p=window.innerHeight;const m={x:f/2,y:f/2},x={x:f/2,y:f/2};let y=0;const g=[],w=[];let v,M;e()}new t});