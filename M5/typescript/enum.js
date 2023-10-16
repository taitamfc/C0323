var CardinalDirections;
(function (CardinalDirections) {
    CardinalDirections[CardinalDirections["North"] = 5] = "North";
    CardinalDirections[CardinalDirections["East"] = 6] = "East";
    CardinalDirections[CardinalDirections["South"] = 10] = "South";
    CardinalDirections[CardinalDirections["West"] = 11] = "West";
})(CardinalDirections || (CardinalDirections = {}));
var currentDirection = CardinalDirections.North;
// logs 0
console.log(currentDirection);
// throws error as 'North' is not a valid enum
//   currentDirection = 'North'; // Error: "North" is not assignable to type 'CardinalDirections'.
