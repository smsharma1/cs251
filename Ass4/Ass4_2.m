sam=10;
for i=1:6
points=2*rand(sam,2);
y=((1.-points(:,1)).^2+(1.-points(:,2)).^2);
count=length(find(y<1))(1);
ans(i,1)=count*4/(10^i);
ans(i,2)=sam;
ans(i,3)=pi;
sam=10*sam;
end
semilogx(ans(:,2),ans(:,1),'r',ans(:,2),ans(:,3),'g');
title('Pie Values by probability method')
xlabel('Log(x)')
ylabel('pie values')
legend('Estimated value','Actual value')
