const register = require('./register');

test('verifies credentials for register', () => {
  expect(register('SuperAdmin', 'admin@technoblog.com', 'ornitorincoBailando751?')).toBe(true);
});