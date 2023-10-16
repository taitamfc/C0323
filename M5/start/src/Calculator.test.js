import { fireEvent, render, screen } from '@testing-library/react';
import Calculator, { getSum, getTru } from './Calculator';

describe('Kiem tra tinh toan', () => {
  test('Kiem tra com:Calculator:getSum co chay khong', () => {
    let expected = 2;
    let output = getSum(1,1);
    // So sanh expected voi output
    expect(expected).toBe(output);
  });
  test('Kiem tra com:Calculator:getTru co chay khong', () => {
    let expected = 2;
    let output = getTru(3,1);
    // So sanh expected voi output
    expect(expected).toBe(output);
  });
})
describe('Kiem tra component', () => {
  test('Kiem tra com:Calculator:getSum co chay khong', () => {
    render(<Calculator />);
    // Lay 3 doi tuong
    const input_1 = screen.getByTestId('value-one-input');
    const input_2 = screen.getByTestId('value-two-input');
    const button = screen.getByTestId('button-add');
    const result = screen.getByTestId('result');

    // Gan 1 vao o input 1
    fireEvent.change(input_1, {
      target: { value: 2 },
    });

    // Gan 2 vao o input 2
    fireEvent.change(input_2, {
      target: { value: 2 },
    });

    // Thuc hien click
    fireEvent.click(button);

    // So sanh gia tri text voi gia tri mong doi
    let expected = 'Result: 4';
    let output = result.textContent

    expect(expected).toBe(output);
  })
})



