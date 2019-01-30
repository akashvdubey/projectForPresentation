import sys
x=list(sys.argv[1])
print(x)
#x=list(input("enter the master word "))
r=list()
r.insert(0,"".join(y for y in x))
n=len(x)
for k in range(1,n):
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
r.sort()
print(r)
print("total such possible combinations are {}".format(len(r)))
print(sys.getrefcount(1))
