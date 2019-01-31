astring=list("011111100101111111")
ct0,ct1,lenfoundsofar,currentlength=0,0,0,0
for i in astring:
    if i=='0':
        ct1copy=ct1
        ct1=0
        ct0+=1
        if ct0>ct1copy and ct0+ct1copy>lenfoundsofar:
            lenfoundsofar=ct0+ct1copy
    else:
        ct0copy=ct0
        ct0=0
        ct1+=1
        if ct0copy>ct1 and ct0copy+ct1>lenfoundsofar:
            lenfoundsofar=ct0copy+ct1
print("the largest substring is of size {}".format(lenfoundsofar))
