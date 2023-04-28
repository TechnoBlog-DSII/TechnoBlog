const register = require('./register');

test('verifies credentials for register', () => {
  expect(register('SuperAdmin', 'admin@technoblog.com', 'ornitorincoBailando751?')).toBe(true);
  expect(register('CoderFrontEnd', 'admin@technoblog.com', '123')).toBe(false);
  expect(register('Cod', 'admin@technoblog.com', '123')).toBe(false);
  expect(register('JesusAlcalino', 'jesus@gmail.com', 'alcalino787Jesus')).toBe(true);
  expect(register('BrosMario', 'mario@nintendo.com', 'NintendoMario1928')).toBe(true);
});