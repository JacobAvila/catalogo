'use strict';

exports.__esModule = true;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _react = require('react');

var _react2 = _interopRequireDefault(_react);

var _propTypes = require('prop-types');

var _propTypes2 = _interopRequireDefault(_propTypes);

var _classnames = require('classnames');

var _classnames2 = _interopRequireDefault(_classnames);

var _index = require('./Shared/index');

var _toggleClasses = require('./Shared/toggle-classes');

var _toggleClasses2 = _interopRequireDefault(_toggleClasses);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _objectWithoutProperties(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var propTypes = {
  children: _propTypes2.default.node,
  className: _propTypes2.default.string,
  defaultOpen: _propTypes2.default.bool,
  display: _propTypes2.default.any,
  mobile: _propTypes2.default.bool,
  tag: _propTypes2.default.oneOfType([_propTypes2.default.func, _propTypes2.default.string]),
  type: _propTypes2.default.string
};

var defaultProps = {
  defaultOpen: false,
  display: 'lg',
  mobile: false,
  tag: 'button',
  type: 'button'
};

var AppAsideToggler = function (_Component) {
  _inherits(AppAsideToggler, _Component);

  function AppAsideToggler(props) {
    _classCallCheck(this, AppAsideToggler);

    var _this = _possibleConstructorReturn(this, _Component.call(this, props));

    _this.asideToggle = _this.asideToggle.bind(_this);

    _this.state = {};
    return _this;
  }

  AppAsideToggler.prototype.componentDidMount = function componentDidMount() {
    this.toggle(this.props.defaultOpen);
  };

  AppAsideToggler.prototype.toggle = function toggle(force) {
    var _ref = [this.props.display, this.props.mobile],
        display = _ref[0],
        mobile = _ref[1];

    var cssClass = _index.asideMenuCssClasses[0];
    if (!mobile && display && (0, _index.checkBreakpoint)(display, _index.validBreakpoints)) {
      cssClass = 'aside-menu-' + display + '-show';
    }
    (0, _toggleClasses2.default)(cssClass, _index.asideMenuCssClasses, force);
  };

  AppAsideToggler.prototype.asideToggle = function asideToggle(e) {
    e.preventDefault();
    this.toggle();
  };

  AppAsideToggler.prototype.render = function render() {
    var _this2 = this;

    var _props = this.props,
        className = _props.className,
        children = _props.children,
        type = _props.type,
        Tag = _props.tag,
        attributes = _objectWithoutProperties(_props, ['className', 'children', 'type', 'tag']);

    delete attributes.defaultOpen;
    delete attributes.display;
    delete attributes.mobile;

    var classes = (0, _classnames2.default)(className, 'navbar-toggler');

    return _react2.default.createElement(
      Tag,
      _extends({
        type: type,
        className: classes
      }, attributes, {
        onClick: function onClick(event) {
          return _this2.asideToggle(event);
        }
      }),
      children || _react2.default.createElement('span', { className: 'navbar-toggler-icon' })
    );
  };

  return AppAsideToggler;
}(_react.Component);

AppAsideToggler.propTypes = process.env.NODE_ENV !== "production" ? propTypes : {};
AppAsideToggler.defaultProps = defaultProps;

exports.default = AppAsideToggler;
module.exports = exports['default'];