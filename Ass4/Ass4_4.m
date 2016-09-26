x=[0:50]';
load "Output4_3.mat" y h1 h2 h3 h4 h5 h6 s1 s2 s3 s4 s5 s6
plot(x,y,'b',x,h1,'g',x,h2,'c',x,h3,'m',x,h4,'y',x,h5,'r',x,h6,'color',[0.8,0.8,0.8]);
title('Sampled Histogram Values');
xlabel('Values [0:50]');
ylabel('Histogram H and Guassian y');
legend('Gaussian','h1','h2','h3','h4','h5','h6');
