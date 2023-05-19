const register = require('./register');

test('verifies credentials for register', () => {
  expect(register('SuperAdmin', 'admin@technoblog.com', 'ornitorinco751?')).toBe(true);
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

test('verifies credentials for register', () => {
  expect(register('BrosMario', 'marionintendo.com', 'NintendoMario1928')).toBe(false);
});

test('verifies credentials for register', () => {
  expect(register('', '', '')).toBe(false);
});

test('verifies credentials for register', () => {
  expect(register('JoseMaria', 'q21jose@gmail.com', 'JoseMaria123?')).toBe(false);
});

test('verifies credentials for register', () => {
  expect(register('Mario Alberto', '@', 'asdasda1q213=??')).toBe(false);
});

test('verifies credentials for register', () => {
  expect(register('Mario Alberto', 'asdasda@as21d1d', 'Mario')).toBe(false);
});