var twoSum = function(nums, target){
    let arr = []
    for(let i = 0; i < nums.length; i++){
        for(let j = 0; j < nums.length; j++){
            if(nums[i] + nums[j] == target && i){
                arr.push(j,i)
                break;
            }
        }
    }
    return arr;
};

console.log(twoSum[2,7,11,15], 9);