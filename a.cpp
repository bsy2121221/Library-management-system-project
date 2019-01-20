#include <bits/stdc++.h>

using namespace std;
void organizingContainers(vector<vector<int>> container) {
int m=container[0].size();
    vector<int> sum_col;
    vector<int> sum_row;
for(int i=0;i<m;i++)
{
    for(int j=0;j<m;j++)
    {
        sum_col[i]+=container[i][j];
        sum_row[i]+=container[j][i];
    }
}
sort(sum_col.begin(),sum_col.end());
sort(sum_row.begin(),sum_row.end());
if(sum_col==sum_row)
cout<<"Possible";
else
cout<<"Impossible";

}

int main()
{
    

    int q;
    cin >> q;
    

    for (int q_itr = 0; q_itr < q; q_itr++) {
        int n;
        cin >> n;
        

        vector<vector<int>> container(n);
        for (int i = 0; i < n; i++) {
            container[i].resize(n);

            for (int j = 0; j < n; j++) {
                cin >> container[i][j];
            }
        }

       organizingContainers(container);
cout<<endl;

      
    }


    return 0;
}
