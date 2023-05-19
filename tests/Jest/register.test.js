const register = require('./register');

test('verifies credentials for register', () => {
  expect(register('SuperAdmin', 'admin@technoblog.com', 'ornitorincoBailando751?')).toBe(true);
});

test('verifies credentials for register', () => {
  expect(register('CoderFrontEnd', 'admin@technoblog.com', '123')).toBe(false);
});

test('verifies credentials for register', () => {
  expect(register('Cod', 'admin@technoblog.com', '123')).toBe(false);
});

test('verifies credentials for register', () => {
  expect(register('JesusAlcalino', 'jesus@gmail.com', 'alcalino787Jesus')).toBe(true);
});

test('verifies credentials for register', () => {
  expect(register('BrosMario', 'mario@nintendo.com', 'NintendoMario1928')).toBe(true);
});