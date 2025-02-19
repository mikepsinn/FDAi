"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.logEndOfProcess = exports.logStartOfProcess = exports.logErrorAndThrowException = exports.slugify = exports.throwError = exports.getCurrentServerContext = exports.logBugsnagLink = exports.prettyJSONStringify = exports.obfuscateSecrets = exports.obfuscateString = exports.isSecretWord = exports.obfuscateStringify = exports.addMetaData = exports.debug = exports.info = exports.error = exports.le = void 0;
var js_1 = require("@bugsnag/js");
var stringHelper = require("./stringHelper");
var env_helper_1 = require("./envHelper");
function le(s, meta) {
  s = obfuscateString(s);
  if (meta) {
    meta = obfuscateSecrets(meta);
    s += prettyJSONStringify(meta);
  }
  throw Error(s);
}
exports.le = le;
// tslint:disable-next-line:max-line-length
function isTruthy(value) {
  return (value && value !== "false");
}
// getEnvOrException(envs.BUGSNAG_API_KEY)
function getBugsnag() {
  js_1.default.start({
    apiKey: (0, env_helper_1.getEnvOrException)(env_helper_1.envNames.BUGSNAG_API_KEY),
    releaseStage: getCurrentServerContext(),
    onError: function (event) {
      event.addMetadata("GLOBAL_META_DATA", addMetaData());
    },
    // otherOptions: https://docs.bugsnag.com/platforms/javascript/configuration-options/
  });
  process.on("unhandledRejection", function (err) {
    // @ts-ignore
    console.error("Unhandled rejection: " + (err && err.stack || err));
    // @ts-ignore
    js_1.default.notify(err);
  });
  return js_1.default;
}
function error(message, metaData, maxCharacters) {
  // tslint:disable-next-line:no-debugger
  debugger;
  metaData = addMetaData(metaData);
  message = obfuscateStringify(message, metaData, maxCharacters);
  if (env_helper_1.qmPlatform.isBackEnd()) {
    message = "=====================\n" + message + "\n=====================";
  }
  console.error(message);
  if ((0, env_helper_1.getenv)(env_helper_1.envNames.BUGSNAG_API_KEY)) {
    getBugsnag().notify(obfuscateStringify(message), metaData);
  }
}
exports.error = error;
function info(message, object, maxCharacters) {
  console.info(obfuscateStringify(message, object, maxCharacters));
}
exports.info = info;
function debug(message, object, maxCharacters) {
  if (isTruthy(process.env.BUILD_DEBUG || process.env.DEBUG_BUILD)) {
    info("DEBUG: " + message, object, maxCharacters);
  }
}
exports.debug = debug;
function addMetaData(metaData) {
  metaData = metaData || {};
  metaData.environment = obfuscateSecrets(process.env);
  metaData.client_id = (0, env_helper_1.getQMClientIdIfSet)();
  return metaData;
}
exports.addMetaData = addMetaData;
function obfuscateStringify(message, object, maxCharacters) {
  maxCharacters = maxCharacters || 140;
  var objectString = "";
  if (object) {
    object = obfuscateSecrets(object);
    objectString = ":  " + prettyJSONStringify(object);
  }
  if (maxCharacters && objectString.length > maxCharacters) {
    objectString = objectString.substring(0, maxCharacters) + "...";
  }
  message += objectString;
  message = obfuscateString(message);
  return message;
}
exports.obfuscateStringify = obfuscateStringify;
function isSecretWord(propertyName) {
  var lowerCaseProperty = propertyName.toLowerCase();
  return lowerCaseProperty.indexOf("secret") !== -1 ||
    lowerCaseProperty.indexOf("password") !== -1 ||
    lowerCaseProperty.indexOf("key") !== -1 ||
    lowerCaseProperty.indexOf("database") !== -1 ||
    lowerCaseProperty.indexOf("token") !== -1;
}
exports.isSecretWord = isSecretWord;
function obfuscateString(str) {
  var env = process.env;
  for (var propertyName in env) {
    if (env.hasOwnProperty(propertyName)) {
      var val = env[propertyName];
      if (val && isSecretWord(propertyName) && val.length > 6) {
        // @ts-ignore
        str = stringHelper.replaceAll(str, val, "[" + propertyName + " hidden by obfuscateString]");
      }
    }
  }
  return str;
}
exports.obfuscateString = obfuscateString;
function obfuscateSecrets(object) {
  if (typeof object !== "object") {
    return object;
  }
  object = JSON.parse(JSON.stringify(object)); // Decouple so we don't screw up original object
  for (var propertyName in object) {
    if (object.hasOwnProperty(propertyName)) {
      if (isSecretWord(propertyName)) {
        object[propertyName] = "[" + propertyName + " hidden by obfuscateSecrets]";
      }
      else {
        object[propertyName] = obfuscateSecrets(object[propertyName]);
      }
    }
  }
  return object;
}
exports.obfuscateSecrets = obfuscateSecrets;
function prettyJSONStringify(object) {
  return JSON.stringify(object, null, "\t");
}
exports.prettyJSONStringify = prettyJSONStringify;
function logBugsnagLink(suite, start, end) {
  var query = "filters[event.since][0]=" + start +
    "&filters[error.status][0]=open&filters[event.before][0]=" + end +
    "&sort=last_seen";
  console.error("https://app.bugsnag.com/quantimodo/" + suite + "/errors?" + query);
}
exports.logBugsnagLink = logBugsnagLink;
function getCurrentServerContext() {
  if (process.env.CIRCLE_BRANCH) {
    return "circleci";
  }
  if (process.env.BUDDYBUILD_BRANCH) {
    return "buddybuild";
  }
  return process.env.HOSTNAME;
}
exports.getCurrentServerContext = getCurrentServerContext;
function throwError(message, metaData, maxCharacters) {
  error(message, metaData, maxCharacters);
  throw Error(message);
}
exports.throwError = throwError;
function slugify(str) {
  str = str.replace(/^\s+|\s+$/g, ""); // trim
  str = str.toLowerCase();
  // remove accents, swap ñ for n, etc
  var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
  var to = "aaaaeeeeiiiioooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }
  str = str.replace(".", "-") // replace a dot by a dash
    .replace(/[^a-z0-9 -]/g, "") // remove invalid chars
    .replace(/\s+/g, "-") // collapse whitespace and replace by a dash
    .replace(/-+/g, "-"); // collapse dashes
  return str;
}
exports.slugify = slugify;
function logErrorAndThrowException(message, object) {
  error(message, object);
  throw message;
}
exports.logErrorAndThrowException = logErrorAndThrowException;
function logStartOfProcess(str) {
  console.log("STARTING " + str + "\n====================================");
}
exports.logStartOfProcess = logStartOfProcess;
function logEndOfProcess(str) {
  console.log("====================================\n" + "DONE WITH " + str);
}
exports.logEndOfProcess = logEndOfProcess;
