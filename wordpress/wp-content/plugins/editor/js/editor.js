function toto(arr1, arr2) {
    let len1 = arr1.length;
    let len2 = arr2.length;
    console.log('len1 = ' + len1);
    console.log('len2 = ' + len2);
    if (len1 > len2) {
        console.log('len1 > len2');
    }
    else if (len1 < len2) {
        console.log('len1 < len2');
    }
    else {
        console.log('len1 = len2');
    }
}

toto([4, 4, 4, 4], [4, 4, 4]);