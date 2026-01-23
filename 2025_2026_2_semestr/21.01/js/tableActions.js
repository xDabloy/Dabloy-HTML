function tableActions() {
  let Numbers = [
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
    randomnumbers(),
  ]; //zad 1

  console.log(Numbers[7].toString()); //zad 2
  console.log(Numbers.toString()); //zad do 3
  console.log(sortedNumbers.toString()); //zad 3
  console.log(sortedNumbers.toString()); //zad 3
  let sortedNumbers = Numbers + sortNumbers(); //zad 3

  Numbers.pop(9);
  console.log(Numbers.toString()); //zad 4

  Numbers.push(randomnumbers());
  console.log(Numbers.toString()); //zad 5
}

