from itertools import combinations_with_replacement
t=int(input())
solution=list()
for i in range(0,t):
    numbers = list(map(int, input().split()))
    n=int(numbers[0])
    a=int(numbers[1])
    b=-int(numbers[2])
    comb=list(combinations_with_replacement([0,a,b],n))
    for j in comb:
        sum=0
        for k in j:
            sum+=k
            solution.append(sum)
            solution_set=set(solution)
    print(len(solution_set))
    solution_set=set()
    solution=list()
    #comb=combinations_with_replacement([0,a,b],n)
