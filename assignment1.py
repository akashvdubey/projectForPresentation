x=list(input("enter the master word"))
for i in x:
    print(i)
n=len(x)
for k in range(0,n-1):
    for j in range(0,n-k+1):
        temp=x.copy()
        for p in range(j,j+k):
            temp.remove(temp[p])
        finalstring="".join(b for b in temp)
        print(finalstring)
