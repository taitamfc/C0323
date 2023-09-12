import { render, screen } from '@testing-library/react';
import Count from './Count';

test('Kiem tra com:count co chuoi Tam', () => {
  render(<Count />);
  const linkElement = screen.getByText(/Hello/i);
  expect(linkElement).toBeInTheDocument();
});
