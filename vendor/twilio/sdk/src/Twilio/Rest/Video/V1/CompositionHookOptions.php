<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class CompositionHookOptions {
    /**
     * @param bool $enabled Read only CompositionHook resources with an enabled
     *                      value that matches this parameter
     * @param \DateTime $dateCreatedAfter Read only CompositionHook resources
     *                                    created on or after this ISO 8601
     *                                    datetime with time zone
     * @param \DateTime $dateCreatedBefore Read only CompositionHook resources
     *                                     created before this ISO 8601 datetime
     *                                     with time zone
     * @param string $friendlyName Read only CompositionHook resources with
     *                             friendly names that match this string
     * @return ReadCompositionHookOptions Options builder
     */
    public static function read($enabled = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE, $friendlyName = Values::NONE) {
        return new ReadCompositionHookOptions($enabled, $dateCreatedAfter, $dateCreatedBefore, $friendlyName);
    }

    /**
     * @param bool $enabled Whether the composition hook is active
     * @param array $videoLayout An object that describes the video layout of the
     *                           composition hook
     * @param string $audioSources An array of track names from the same group room
     *                             to merge
     * @param string $audioSourcesExcluded An array of track names to exclude
     * @param string $resolution A string that describes the rows (width) and
     *                           columns (height) of the generated composed video
     *                           in pixels
     * @param string $format The container format of the media files used by the
     *                       compositions created by the composition hook
     * @param string $statusCallback The URL we should call to send status
     *                               information to your application
     * @param string $statusCallbackMethod The HTTP method we should use to call
     *                                     status_callback
     * @param bool $trim Whether to clip the intervals where there is no active
     *                   media in the Compositions triggered by the composition hook
     * @return CreateCompositionHookOptions Options builder
     */
    public static function create($enabled = Values::NONE, $videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $resolution = Values::NONE, $format = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $trim = Values::NONE) {
        return new CreateCompositionHookOptions($enabled, $videoLayout, $audioSources, $audioSourcesExcluded, $resolution, $format, $statusCallback, $statusCallbackMethod, $trim);
    }

    /**
     * @param bool $enabled Whether the composition hook is active
     * @param array $videoLayout A JSON object that describes the video layout of
     *                           the composition hook
     * @param string $audioSources An array of track names from the same group room
     *                             to merge
     * @param string $audioSourcesExcluded An array of track names to exclude
     * @param bool $trim Whether to clip the intervals where there is no active
     *                   media in the Compositions triggered by the composition hook
     * @param string $format The container format of the media files used by the
     *                       compositions created by the composition hook
     * @param string $resolution A string that describes the columns (width) and
     *                           rows (height) of the generated composed video in
     *                           pixels
     * @param string $statusCallback The URL we should call to send status
     *                               information to your application
     * @param string $statusCallbackMethod The HTTP method we should use to call
     *                                     status_callback
     * @return UpdateCompositionHookOptions Options builder
     */
    public static function update($enabled = Values::NONE, $videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $trim = Values::NONE, $format = Values::NONE, $resolution = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE) {
        return new UpdateCompositionHookOptions($enabled, $videoLayout, $audioSources, $audioSourcesExcluded, $trim, $format, $resolution, $statusCallback, $statusCallbackMethod);
    }
}

class ReadCompositionHookOptions extends Options {
    /**
     * @param bool $enabled Read only CompositionHook resources with an enabled
     *                      value that matches this parameter
     * @param \DateTime $dateCreatedAfter Read only CompositionHook resources
     *                                    created on or after this ISO 8601
     *                                    datetime with time zone
     * @param \DateTime $dateCreatedBefore Read only CompositionHook resources
     *                                     created before this ISO 8601 datetime
     *                                     with time zone
     * @param string $friendlyName Read only CompositionHook resources with
     *                             friendly names that match this string
     */
    public function __construct($enabled = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE, $friendlyName = Values::NONE) {
        $this->options['enabled'] = $enabled;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['friendlyName'] = $friendlyName;
    }

    /**
     * Read only CompositionHook resources with an `enabled` value that matches this parameter.
     *
     * @param bool $enabled Read only CompositionHook resources with an enabled
     *                      value that matches this parameter
     * @return $this Fluent Builder
     */
    public function setEnabled($enabled) {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * Read only CompositionHook resources created on or after this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     *
     * @param \DateTime $dateCreatedAfter Read only CompositionHook resources
     *                                    created on or after this ISO 8601
     *                                    datetime with time zone
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Read only CompositionHook resources created before this [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) datetime with time zone.
     *
     * @param \DateTime $dateCreatedBefore Read only CompositionHook resources
     *                                     created before this ISO 8601 datetime
     *                                     with time zone
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Read only CompositionHook resources with friendly names that match this string. The match is not case sensitive and can include asterisk `*` characters as wildcard match.
     *
     * @param string $friendlyName Read only CompositionHook resources with
     *                             friendly names that match this string
     * @return $this Fluent Builder
     */
    public function setFriendlyName($friendlyName) {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.ReadCompositionHookOptions ' . \implode(' ', $options) . ']';
    }
}

class CreateCompositionHookOptions extends Options {
    /**
     * @param bool $enabled Whether the composition hook is active
     * @param array $videoLayout An object that describes the video layout of the
     *                           composition hook
     * @param string $audioSources An array of track names from the same group room
     *                             to merge
     * @param string $audioSourcesExcluded An array of track names to exclude
     * @param string $resolution A string that describes the rows (width) and
     *                           columns (height) of the generated composed video
     *                           in pixels
     * @param string $format The container format of the media files used by the
     *                       compositions created by the composition hook
     * @param string $statusCallback The URL we should call to send status
     *                               information to your application
     * @param string $statusCallbackMethod The HTTP method we should use to call
     *                                     status_callback
     * @param bool $trim Whether to clip the intervals where there is no active
     *                   media in the Compositions triggered by the composition hook
     */
    public function __construct($enabled = Values::NONE, $videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $resolution = Values::NONE, $format = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $trim = Values::NONE) {
        $this->options['enabled'] = $enabled;
        $this->options['videoLayout'] = $videoLayout;
        $this->options['audioSources'] = $audioSources;
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        $this->options['resolution'] = $resolution;
        $this->options['format'] = $format;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['trim'] = $trim;
    }

    /**
     * Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook will never be triggered.
     *
     * @param bool $enabled Whether the composition hook is active
     * @return $this Fluent Builder
     */
    public function setEnabled($enabled) {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * An object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param array $videoLayout An object that describes the video layout of the
     *                           composition hook
     * @return $this Fluent Builder
     */
    public function setVideoLayout($videoLayout) {
        $this->options['videoLayout'] = $videoLayout;
        return $this;
    }

    /**
     * An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     *
     * @param string $audioSources An array of track names from the same group room
     *                             to merge
     * @return $this Fluent Builder
     */
    public function setAudioSources($audioSources) {
        $this->options['audioSources'] = $audioSources;
        return $this;
    }

    /**
     * An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     *
     * @param string $audioSourcesExcluded An array of track names to exclude
     * @return $this Fluent Builder
     */
    public function setAudioSourcesExcluded($audioSourcesExcluded) {
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        return $this;
    }

    /**
     * A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.
    The string's format is `{width}x{height}` where:

    * 16 <= `{width}` <= 1280
    * 16 <= `{height}` <= 1280
    * `{width}` * `{height}` <= 921,600

    Typical values are:

    * HD = `1280x720`
    * PAL = `1024x576`
    * VGA = `640x480`
    * CIF = `320x240`

    Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param string $resolution A string that describes the rows (width) and
     *                           columns (height) of the generated composed video
     *                           in pixels
     * @return $this Fluent Builder
     */
    public function setResolution($resolution) {
        $this->options['resolution'] = $resolution;
        return $this;
    }

    /**
     * The container format of the media files used by the compositions created by the composition hook. Can be: `mp4` or `webm` and the default is `webm`. If `mp4` or `webm`, `audio_sources` must have one or more tracks and/or a `video_layout` element must contain a valid `video_sources` list, otherwise an error occurs.
     *
     * @param string $format The container format of the media files used by the
     *                       compositions created by the composition hook
     * @return $this Fluent Builder
     */
    public function setFormat($format) {
        $this->options['format'] = $format;
        return $this;
    }

    /**
     * The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     *
     * @param string $statusCallback The URL we should call to send status
     *                               information to your application
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call
     *                                     status_callback
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Whether to clip the intervals where there is no active media in the Compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param bool $trim Whether to clip the intervals where there is no active
     *                   media in the Compositions triggered by the composition hook
     * @return $this Fluent Builder
     */
    public function setTrim($trim) {
        $this->options['trim'] = $trim;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.CreateCompositionHookOptions ' . \implode(' ', $options) . ']';
    }
}

class UpdateCompositionHookOptions extends Options {
    /**
     * @param bool $enabled Whether the composition hook is active
     * @param array $videoLayout A JSON object that describes the video layout of
     *                           the composition hook
     * @param string $audioSources An array of track names from the same group room
     *                             to merge
     * @param string $audioSourcesExcluded An array of track names to exclude
     * @param bool $trim Whether to clip the intervals where there is no active
     *                   media in the Compositions triggered by the composition hook
     * @param string $format The container format of the media files used by the
     *                       compositions created by the composition hook
     * @param string $resolution A string that describes the columns (width) and
     *                           rows (height) of the generated composed video in
     *                           pixels
     * @param string $statusCallback The URL we should call to send status
     *                               information to your application
     * @param string $statusCallbackMethod The HTTP method we should use to call
     *                                     status_callback
     */
    public function __construct($enabled = Values::NONE, $videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $trim = Values::NONE, $format = Values::NONE, $resolution = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE) {
        $this->options['enabled'] = $enabled;
        $this->options['videoLayout'] = $videoLayout;
        $this->options['audioSources'] = $audioSources;
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        $this->options['trim'] = $trim;
        $this->options['format'] = $format;
        $this->options['resolution'] = $resolution;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
    }

    /**
     * Whether the composition hook is active. When `true`, the composition hook will be triggered for every completed Group Room in the account. When `false`, the composition hook never triggers.
     *
     * @param bool $enabled Whether the composition hook is active
     * @return $this Fluent Builder
     */
    public function setEnabled($enabled) {
        $this->options['enabled'] = $enabled;
        return $this;
    }

    /**
     * A JSON object that describes the video layout of the composition hook in terms of regions. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param array $videoLayout A JSON object that describes the video layout of
     *                           the composition hook
     * @return $this Fluent Builder
     */
    public function setVideoLayout($videoLayout) {
        $this->options['videoLayout'] = $videoLayout;
        return $this;
    }

    /**
     * An array of track names from the same group room to merge into the compositions created by the composition hook. Can include zero or more track names. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` includes tracks named `student` as well as `studentTeam`.
     *
     * @param string $audioSources An array of track names from the same group room
     *                             to merge
     * @return $this Fluent Builder
     */
    public function setAudioSources($audioSources) {
        $this->options['audioSources'] = $audioSources;
        return $this;
    }

    /**
     * An array of track names to exclude. A composition triggered by the composition hook includes all audio sources specified in `audio_sources` except for those specified in `audio_sources_excluded`. The track names in this parameter can include an asterisk as a wild card character, which matches zero or more characters in a track name. For example, `student*` excludes `student` as well as `studentTeam`. This parameter can also be empty.
     *
     * @param string $audioSourcesExcluded An array of track names to exclude
     * @return $this Fluent Builder
     */
    public function setAudioSourcesExcluded($audioSourcesExcluded) {
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        return $this;
    }

    /**
     * Whether to clip the intervals where there is no active media in the compositions triggered by the composition hook. The default is `true`. Compositions with `trim` enabled are shorter when the Room is created and no Participant joins for a while as well as if all the Participants leave the room and join later, because those gaps will be removed. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param bool $trim Whether to clip the intervals where there is no active
     *                   media in the Compositions triggered by the composition hook
     * @return $this Fluent Builder
     */
    public function setTrim($trim) {
        $this->options['trim'] = $trim;
        return $this;
    }

    /**
     * The container format of the media files used by the compositions created by the composition hook. Can be: `mp4` or `webm` and the default is `webm`. If `mp4` or `webm`, `audio_sources` must have one or more tracks and/or a `video_layout` element must contain a valid `video_sources` list, otherwise an error occurs.
     *
     * @param string $format The container format of the media files used by the
     *                       compositions created by the composition hook
     * @return $this Fluent Builder
     */
    public function setFormat($format) {
        $this->options['format'] = $format;
        return $this;
    }

    /**
     * A string that describes the columns (width) and rows (height) of the generated composed video in pixels. Defaults to `640x480`.
    The string's format is `{width}x{height}` where:

    * 16 <= `{width}` <= 1280
    * 16 <= `{height}` <= 1280
    * `{width}` * `{height}` <= 921,600

    Typical values are:

    * HD = `1280x720`
    * PAL = `1024x576`
    * VGA = `640x480`
    * CIF = `320x240`

    Note that the `resolution` imposes an aspect ratio to the resulting composition. When the original video tracks are constrained by the aspect ratio, they are scaled to fit. See [Specifying Video Layouts](https://www.twilio.com/docs/video/api/compositions-resource#specifying-video-layouts) for more info.
     *
     * @param string $resolution A string that describes the columns (width) and
     *                           rows (height) of the generated composed video in
     *                           pixels
     * @return $this Fluent Builder
     */
    public function setResolution($resolution) {
        $this->options['resolution'] = $resolution;
        return $this;
    }

    /**
     * The URL we should call using the `status_callback_method` to send status information to your application on every composition event. If not provided, status callback events will not be dispatched.
     *
     * @param string $statusCallback The URL we should call to send status
     *                               information to your application
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The HTTP method we should use to call `status_callback`. Can be: `POST` or `GET` and the default is `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call
     *                                     status_callback
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.UpdateCompositionHookOptions ' . \implode(' ', $options) . ']';
    }
}