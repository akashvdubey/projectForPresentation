x=list(input("enter the master word "))
r=list()
r.insert(0,"".join(y for y in x))
#for i in x:
#    print(i)
n=len(x)
for k in range(1,n):
    c=0
    #print("                           the size of empty is{}".format(k))
    for j in range(0,n-k+1):
        #print("the {}th iteration from {} to {}".format(j,j,n-k))
        temp=x.copy()
        for p in range(j,j+k):
            #print("removing from {} to {} location now on {}".format(j,j+k,p))
            temp[p]='?'
            c+=1
        for v in range(c):
            temp.remove('?')
        c=0
        finalstring="".join(b for b in temp)
        r.insert(len(r),finalstring)
print(r)
print("the total possible combinations are {}".format(len(r)))
