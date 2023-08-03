class Solution {
    public int[] countPoints(int[][] points, int[][] queries) {

        int[] answer = new int[queries.length];
        int count =0;

        for(int circle=0; circle<queries.length; circle++)
        {

            for(int point=0; point<points.length; point++)
            {
                if( ( points[point][0] <= (queries[circle][0] + queries[circle][2]) )  && ( points[point][1] <= (queries[circle][1] + queries[circle][2]) ) )
                {
                    answer[circle] = ++count;
                }
            }

            count=0;
        }

       return answer;
    }
}