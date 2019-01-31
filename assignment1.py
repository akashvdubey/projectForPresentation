import sys
x=list("made")

#x=list(input("enter the master word "))
r=list()
r.insert(0,"".join(y for y in x))
n=len(x)
for k in range(0,n+1):
    c=0
    for j in range(0,n-k+1):
        temp=x.copy()
        for p in range(j,j+k):
            temp[p]='?'
            c+=1
        for v in range(c):
            temp.remove('?')
        c=0
        finalstring="".join(b for b in temp)
        r.insert(len(r),finalstring)
#r.sort()
blist=list()
for i in r:
    if(len(i)==1):
        print(i)
print(r)


print("total such possible combinations are {}".format(len(r)))
