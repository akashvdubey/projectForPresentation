
#include<stdio.h>
int per[2002][2002]={0};
void main()
{
    int trucks,roads,permits,i,x,y,cap,years,j,k,counter=0,r,p;
    scanf("%d %d %d",&trucks,&roads,&permits);
     int capacity[2002],copyofcapacity[2002];
    for(i=1;i<=trucks;i++)
        {
            for(j=1;j<=roads;j++)
                {
                    per[i][j]=0;
                }
        }
    for(i=1;i<=permits;i++)
        {
            scanf("%d %d",&x,&y);
            per[x][y]=1;
        }
    for(i=1;i<=roads;i++)
        {
           scanf("%d",&capacity[i]);
           copyofcapacity[i]=capacity[i];
        }
    scanf("%d",&years);
    for(i=1;i<=years;i++)
        {
                        for(j=1;j<=roads;j++)
                            {
                                printf("\n");
                                for(k=1;k<=trucks;k++)
                                    {
                                      // if(per[j][k]==1)
                                            {
                                                printf("%d ",per[j][k]);
                                               // counter=counter+1;
                                               // capacity[k]=capacity[k]-1;
                                            }
                                    }
                            }
             printf("%d\n",counter);
             counter=0;
             for(j=1;j<=roads;j++)
                    {
                       capacity[j]=copyofcapacity[j];
                    }
            scanf("%d %d",&r,&p);
           capacity[r]=p;

        }
}
