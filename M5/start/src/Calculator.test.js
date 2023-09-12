import { render, screen } from '@testing-library/react';
import Calculator, { getSum } from './Calculator';

test('Kiem tra com:Calculator:getSum co chay khong', () => {
  let expected = 2;
  let output = getSum(1,1);
  // So sanh expected voi output
  expect(expected).toBe(output);
});
