f=fopen("output.txt",'w');
sam=10;
for i=1:6
points=2*rand(sam,2);
y=((1.-points(:,1)).^2+(1.-points(:,2)).^2);
count=length(find(y<1))(1);
fprintf(f,"%d %.4f\n",sam,4*count/sam);
sam=10*sam;
end
fclose(f);
