interface StringArray {
    [index: number]: string;
}
let myName: StringArray;
myName = ["Tôi", "là","Nguyễn","Văn",'18'];

let myStr: string = myName[0];
console.log(myStr);